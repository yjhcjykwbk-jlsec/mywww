#encoding=utf-8
import sys
reload(sys)
sys.setdefaultencoding( "utf-8" )
from bs4 import BeautifulSoup as bs
from pyquery import PyQuery as pyq
import urllib
import MySQLdb as sql
import json
import string
#fp=open('test2.html')
#soup=bs(fp)
#print soup.find_all("div class=\"p_content\"")


def myPrint(content):
  print type(content)
  print content
def myexec(sql):
  try:
    if cursor.execute(sql)!=1:
      print "[FAILED]"+sql
  except Exception ,err:
    print "[FAILED]",type(sql)
    print "[ERROR]",err
def myexec1(sql): 
  try:
    cursor.execute(sql)
  except Exception ,err:
    print "[FAILED]",type(sql)
    print "[ERROR]",err

class Tieba:
  def __init__(self):
    self.db="db"
  def insertPost(self,post_id, post_content,time):
    sql="insert into posts(postid,postcontent,timestamp) values ('%s','%s','%s')"%(post_id,post_content,time)
    #print "insert into posts(postid,postcontent,timestamp) values('%s, '%s','%s')"%(post_id,post_content[0:20],time)
    myexec(sql)
  def insertThread(self,thread_id,post_id):
    sql="insert into threads(tid,postid) values ('%s','%s')"%(thread_id,post_id)
    #print sql
    myexec(sql)
  def insertThreadDetails(self,thread_id,title):
    sql="insert into thread_details(tid,title,timestamp) values ('%s','%s','%s')"%(thread_id,title,'0')
    #print sql
    myexec(sql)
  def updateThreadTimestamp(self,thread_id,time):
    sql="update thread_details set timestamp=\'%s\'"%(time);
    #print sql
    myexec1(sql)
  def insertLzl(self,post_id,spid,content,time):
    sql="insert into lzls(postid,spid,content,timestamp) values(%s,%s,'%s','%s')"%(post_id,spid,content,time)
    #print "insert into lzls(postid,spid,content,timestamp) values(%s,%s,'%s','%s')"%(post_id,spid,content[0:20],time)
    myexec1(sql)
  def clear(self):
    sql="delete from posts where 1=1"
    myexec1(sql);
    sql="delete from threads where 1=1"
    myexec1(sql);
    sql="delete from thread_details where 1=1"
    myexec1(sql);
    sql="delete from lzls where 1=1"
    myexec1(sql);
def saveFile(html,filename):
  file=open(filename,'w')
  file.write(html)
  file.flush();
  file.close();

#""把字符串全角转半角"""
def strQ2B(ustring):
  ustring=ustring.decode("cp936")
  rstring=""
  for uchar in ustring:
    inside_code=ord(uchar)
    print inside_code
    if inside_code==0x3000:
      inside_code=0x0020
    else:
      inside_code-=0xfee0
    if inside_code<0x0020 or inside_code>0x7e:
      rstring+=uchar.encode('cp936')
    else:
      rstring+=(unichr(inside_code)).encode('cp936')
  return rstring
def myEncode(text):
  try:
    #text=strQ2B(text)
    text=text.decode("utf-8").encode("gbk");
  except Exception, err:
    print "[FAILED]myEncode:",type(text)
    print "[ERROR]",err
  text=text.replace("'","\\'");
  return text

#initialize global variables  
# database
db = sql.connect("127.0.0.1","root","","tieba" )
# prepare a cursor object using cursor() method
cursor = db.cursor()
tieba=Tieba()
#clear all database of this tieba
#tieba.clear();

def myOpen(url):
  import urllib,urllib2,cookielib
  opener = urllib2.build_opener(urllib2.HTTPCookieProcessor(cookielib.LWPCookieJar()))
  html=opener.open(url).read()
  saveFile(html,'temp.html')
 
def getPager1(doc):#doc is a pyquery obj
  return doc('li.l_pager')('.pager_theme_2') 

def getPager2(doc):
  return doc('.pager')('.clearfix')

def getNextPage(o_url,page):
  if o_url.find('?'):
    url=o_url+"&pn="+"%s"%(page)
  else:
    url=o_url+"?pn="+"%s"%(page)
  return url

def handlePages(url,page,getPager,func,parameters):
  #html=fp.read();#gbk 
  #myOpen(url)
  html=pyq(url);
  doc=pyq(html)
  #handlePostPage(doc)
  func(doc,parameters);
  l_pager=getPager(doc);
  #print l_pager
  if l_pager:
    #cur_page=pyq(l_pager)('.tP') #<span class="tP">2</span>
    #cur_page=string.atoi(cur_page.text())
    #cur_page=page
    for page_num in l_pager.children():
      href_text=pyq(page_num).text()
      if href_text=="%s"%(page+1):
        url="http://tieba.baidu.com"+pyq(page_num).attr('href')
        print "handling next page:"+url;
        handlePages(url,page+1,getPager,func,parameters) #下一页
        break

#handle with the main page 
def handleMainPage(doc,parameters):
    threadlist_texts=doc('.threadlist_title')
    for threadlist_text in threadlist_texts:
      j_th_tit=pyq(threadlist_text)('a')
      title=myEncode(j_th_tit.text())
      href=pyq(j_th_tit).attr('href')
      if href[0]!='/':#not a thread, such as href='/p/xxx'
        continue
      tid=href.split('/')[2]
      print "title:"+title
      print "tid:"+tid
      tieba.insertThreadDetails(tid,title)
      parameters={}
      parameters['thread_id']=tid
      #handle with each thread
      handlePages('http://tieba.baidu.com/p/'+tid,1,getPager1,handlePostPage,parameters)

#handle with the posts page
def handlePostPage(doc,parameters):
  thread_id=parameters['thread_id']
  print "handling thread:"+thread_id
  l_posts=doc('.l_post')
  #d_post_content_mains=doc('.d_post_content_main')
  for i,l_post in enumerate(l_posts):
    datas=(pyq(l_post)).attr('data-field')
    datas=json.loads(datas)
    time=myEncode(datas['content']['date'])
    #for each post in this page
    d_post_content=(pyq(l_post))('.d_post_content')
    post_content_id=pyq(d_post_content).attr('id')
    ri=post_content_id.rfind("_")
    post_id=post_content_id.split('_')[2]
    post_content=pyq(d_post_content).text()
    #if is the last post
    if i==len(l_posts)-1:
      print "update thread:"+thread_id+" timestamp:"+time+" post:"+post_id
      tieba.updateThreadTimestamp(thread_id,time)
    #print "handling post:"+post_id 
    tieba.insertThread(thread_id,post_id)
    post_content=myEncode(post_content)
    #post_content=repr(post_content);
    tieba.insertPost(post_id,post_content,time)
    #handle with lzl( lou zhong lou )
    lzls=(pyq(l_post))('li.lzl_single_post')
    if lzls:
      for lzl in lzls:
        data_field=pyq(lzl).attr('data-field');
        if data_field==None:
          break
        lzl_data=(json.loads(data_field))
        spid=myEncode(lzl_data['spid'])
        if spid==None:
          break;
        print "handling lzl:"+spid
        lzl_cnt=myEncode(pyq(lzl)('.lzl_content_main').text())
        lzl_time=pyq(lzl)('.lzl_time').text()
        tieba.insertLzl(post_id,spid,lzl_cnt,lzl_time)
        

parameters={}
#parameters['thread_id']='2072174673'
#handlePages("http://tieba.baidu.com/p/2072174673",1,getPager1,handlePostPage,parameters)
#parameters=''
handlePages("http://tieba.baidu.com/f?kw=%CA%F1%C9%BD%BD%A3%BF%CD&tp=0",1,getPager2,handleMainPage,parameters)

    #post_content=sql.escape_string(str(post_content))
  #print sql.escape_string(str)
