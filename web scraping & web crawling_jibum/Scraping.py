import urllib
import urllib.request
from bs4 import BeautifulSoup

theurl = "https://twitter.com/realDonaldTrump"
thepage = urllib.request.urlopen(theurl)
soup = BeautifulSoup(thepage, "html.parser")

print(soup.find('div',{"class":"ProfileHeaderCard"}).find('p').text)

for tweets in soup.find_all('div',{"class":"content"}):
    print(tweets.find('p').text)
