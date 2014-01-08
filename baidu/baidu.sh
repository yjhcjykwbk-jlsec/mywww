#!/bin/sh
###/var/www
###$1对应username，$2对应pages
[ -z $1 ] && exit
user=$1
host="http://hi.baidu.com/"$user"/"

mkdir $user
cd $user && mkdir blog
cd blog  && mkdir index category item
cd ..

[ -f blog/index.html ] || wget $host"/blog" -O "blog/index.html" 2>tmp

category_dir="blog/category/"
urllist=`cat blog/index.html |grep -o '<a href=[^>]*category[^"]*"' |grep -o  -E '"[^"]*"' |grep -o '[^"]*' `
for url in $urllist;do  
	category=`echo $url | grep -o '[^/]*$'`
	mkdir -p $category_dir$category/index 2>tmp
	[ -f $category_dir$category/index.html ] || wget "hi.baidu.com"$url -O $category_dir$category/index.html 2>tmp
	urllist=`cat $category_dir$category/index.html | grep -o '<a href=[^>]*\/index\/.'|grep -o '.$' `
	for url in $urllist
	do 
		[ -f $category_dir$category/index/$url.html ] || wget $host$category_dir$category/index/$url -O $category_dir$category/index/$url.html 2>tmp
	done
done 

#calendar_dir="blog/calendar/"
#kdir $calendar_dir 2>tmp
#calendarlist=`cat blog/index.html|grep -o -n $user"/blog/calendar/[^\"]*"` #|grep [^/]*$`
#echo $calendarlist
#for calendar in $calendarlist;do
#	[ -f $calendar_dir$calendar.html ] || wget $host$calendar_dir$calendar -O $calendar_dir$calendar.html 2>tmp
#done

##index/i and item/xx.html
index_dir="blog/index/"
for i in `seq $2`;do 
	index=$(($i-1))
	[ -f $index_dir$index".html" ] || wget $host$index_dir$index -O $index_dir$index".html" 2>tmp || return
	urllist=`cat $index_dir$index.html |grep -o '<a href=[^>]*item[^"]*html"' |grep -o -E '"[^"]*"' |grep -o '[^"]*' `
#	echo $urllist
	for url in $urllist;do
		file=`echo $url | grep -o '[^\/]*html'`
		[ -f blog/item/$file ] || wget http://hi.baidu.com$url -O blog/item/$file 2>tmp
	done
done

#--index
#<a href="/%D6%D0%B9%FA%C4%D4%BD%EE/blog/item/3a680fa97b0b6c90cb130c9b.html" target="_blank">[Solution] NOI 2012</a>
#<a href="http://hi.baidu.com/%D6%D0%B9%FA%C4%D4%BD%EE/blog/category/%C0%ED%D0%D4%D3%E4%D4%C3"
for file in `find blog -type f`;do
	sed -i 's/<a href="http:\/\/hi.baidu.com/<a href="/g' $file  
#	sed -i 's/<a href="http:\/\/hi.baidu.com\/%D6%D0%B9%FA%C4%D4%BD%EE\/*blog/<a href="\.\./g' blog/index/$file  ||
#	sed -i 's/<a href="http:\/\/hi.baidu.com\/%D6%D0%B9%FA%C4%D4%BD%EE\/*blog/<a href="\.\./g' blog/category/$file
##	sed -i 's/<a href="\/%D6%D0%B9%FA%C4%D4%BD%EE/<a href="\.\.\/\.\./g' blog/index/$file
#	sed -i 's/\/%D6%D0%B9%FA%C4%D4%BD%EE/\.\.\/\.\./g' blog/index/$file ||	sed -i 's/\/%D6%D0%B9%FA%C4%D4%BD%EE/\.\.\/\.\./g' blog/category/$file
#	echo "handled blog/index/$file"
done;
#sed -i 's/<a href="http:\/\/hi.baidu.com\/%D6%D0%B9%FA%C4%D4%BD%EE/<a href="\.\./g' blog/index.html
#sed -i 's/<a href="\/%D6%D0%B9%FA%C4%D4%BD%EE/<a href="\.\./g' blog/index.html
#echo "handled blog/index.html"

