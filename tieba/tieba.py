#encoding=utf-8
from bs4 import BeautifulSoup as bs
from pyquery import PyQuery as pyq
import urllib
import MySQLdb
fp=open('test.html')
demoHtml = """
<html>
<body>
<div class="icon_col">
        <h1 class="h1user">中国crifan</h1>
 </div>
 </body>
</html>
""";
soup=bs(fp)
print soup.find_all("div class=\"p_content\"")

class Tieba:
  def __init__(self):
    self.db="db"
  def insertPost(post_id,post_content):
    print "insert into table(postid,postcontent) values (%,%)"%(post_id,post_content)

# database
db = MySQLdb.connect("127.0.0.1","root","","tieba" )
# prepare a cursor object using cursor() method
cursor = db.cursor()

doc=pyq(url="http://tieba.baidu.com/p/2072174673?pid=31948424950&cid=0#31948424950")
d_post_contents=doc('.d_post_content')
tieba=Tieba()
for d_post_content in d_post_contents:
  post_content_id=pyq(d_post_content).attr('id')
  ri=post_content_id.rfind("_")
  post_id=post_content_id.split('_')[2]
  post_content=pyq(d_post_content).text()
  print post_id 
  print "########"
  post_content=urllib.quote(post_content)
  print post_content
  print 
  tieba.insertPost(post_id,post_content)
