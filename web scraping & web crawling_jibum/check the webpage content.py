import urllib.request
from bs4 import BeautifulSoup


#setting up

def make_soup(url):
    thepage = urllib.request.urlopen(url)
    soupdata = BeautifulSoup(thepage, "html.parser")
    return soupdata

i=1

soup = make_soup("http://www.okkane.co.kr/shop/shopdetail.html?branduid=126634&search=%25C3%25BB%25B9%25D9%25C1%25F6&sort=order&xcode=103&mcode=000&scode=&GfDT=bmp0W1w%3D")
print(soup)
