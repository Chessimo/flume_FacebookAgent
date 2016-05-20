# flume_FacebookAgent

#1. Change directory 
cd /etc/flume/conf

#2. Starting the Flume agent, facebook.cof = config file
flume-ng agent --conf-file /etc/flume/conf/facebook.conf Dflume.root.logger=DEBUG,console -n TwitterAgent	

#3. Confirm
ctrl + A
ctrl + D

#Starting the crone tab
crontab -e

#Configuring time interval
*/10 * * * * /etc/flume/conf/crawl.php

#Save
ctrl + O 
