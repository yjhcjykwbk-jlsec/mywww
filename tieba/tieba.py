#encoding=utf-8
import sys
reload(sys)
sys.setdefaultencoding( "utf-8" )
from bs4 import BeautifulSoup as bs
from pyquery import PyQuery as pyq
import urllib
import MySQLdb as sql
fp=open('test2.html')
#soup=bs(fp)
#print soup.find_all("div class=\"p_content\"")


def myprint(content):
  print type(content)
  print content

class Tieba:
  def __init__(self):
    self.db="db"
  def insertPost(self,post_id, post_content):
    sql="insert into posts(postid,postcontent) values ('%s',%s)"%(post_id,post_content)
    print sql
    if cursor.execute(sql)!=1:
      print "FAILED"
    print
# database
db = sql.connect("127.0.0.1","root","","tieba" )
# prepare a cursor object using cursor() method
cursor = db.cursor()

#html=fp.read();#gbk 
html=pyq(url="http://tieba.baidu.com/p/2072174673?pid=31948424950&cid=0#31948424950")
doc=pyq(html)
d_post_contents=doc('.d_post_content')
tieba=Tieba()
for d_post_content in d_post_contents:
  post_content_id=pyq(d_post_content).attr('id')
  ri=post_content_id.rfind("_")
  post_id=post_content_id.split('_')[2]
  post_content=pyq(d_post_content).text()
  print post_id 
  try:
    post_content=post_content.replace("'","\\'");
    post_content=post_content.decode("utf-8").encode("gbk");
    myprint(post_content);
    tieba.insertPost(post_id,"'"+post_content+"'")
    #post_content=repr(post_content);
    #myprint(post_content)
    #tieba.insertPost(post_id,post_content)
  except Exception as err: 
    print "ERROR:"
    print err
  finally: 
    print 

try:
  str="中国"
  #print sql.escape_string(str)
except Exception as err:
  print err











    #post_content=sql.escape_string(str(post_content))
