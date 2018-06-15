import urllib.request
from bs4 import BeautifulSoup

#setting up

def make_soup(url):
    thepage = urllib.request.urlopen(url)
    soupdata = BeautifulSoup(thepage, "html.parser")
    return soupdata

i=1

soup = make_soup("https://www.lazada.com.ph/catalog/?spm=a2o4l.home.search.1.239e6ef0iIouDG&q=jeans&_keyori=ss&from=suggest_normal&sugg=jeans_0_1")
print(soup)


# soup = make_soup("http://www.okkane.co.kr/shop/shopbrand.html")
# for img in soup.find_all("img", {'class':"item-list"}):
#     temp=img.get('src')
#     if temp[:1]=="/":
#         image = "https://www.okkane.co.kr" + temp
#     else:
#         image = temp
#     print(image)

    # nametemp = img.get('alt')
    # if len(nametemp) == 0:
    #     filename = str(i)
    #     i=i+1
    # else:
    #     filename=nametemp
    #
    # imagefile = open(filename + ".jpeg",'wb')
    # imagefile.write(urllib.request.urlopen(image).read())
    # imagefile.close()