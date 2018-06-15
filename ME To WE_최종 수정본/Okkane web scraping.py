from selenium import webdriver
import urllib.request
import mysql.connector

chrome_path = r"C:\Users\com\Documents\chromedriver.exe"


driver = webdriver.Chrome(chrome_path)
driver.get("http://www.okkane.co.kr/")

i=1

product_pic = []
product_name = []
product_linka = []
product_price = []

#search by send keys
driver.find_element_by_xpath("""//*[@id="destroy"]/div/div[1]/div[1]/div/form/fieldset/a""").click()
element = driver.find_element_by_name("prize1")
search = input('검색 키워드 입력하세요 : ')
driver.execute_script("arguments[0].value = '"+search+"';",element)
driver.find_element_by_xpath("""//*[@id="search_form"]/fieldset/div/table/tbody/tr[2]/td/a""").click()

posts = driver.find_elements_by_class_name("item-list")
for post in posts:
    names = driver.find_elements_by_class_name("names")
    imgs = driver.find_elements_by_class_name("MS_prod_img_s")
    prices = driver.find_elements_by_class_name("prices")

for img in imgs:
    nametemp = "images/okkane" + str(i) + ".jpg"          #제품 이름 만들기
    i = i + 1                                      #카운터
    imgsrc = img.get_attribute('src')
    product_pic.append(nametemp)
    urllib.request.urlretrieve(imgsrc,"{}".format(nametemp))   #이미지 저장 라이브라리

for name in names:
    pname = name.text
    product_name.append(pname)
    product_link = name.find_element_by_css_selector('a').get_attribute('href')
    product_linka.append(product_link)

for price in prices:
    pprice =price.text
    product_price.append(pprice)

print(product_pic)
print(product_price)
print(product_linka)
print(product_name)

num = len(product_name)   #데이터의 수 뽑다
counter = num - 1

connect = mysql.connector.connect(user='root', password='',
                              host='127.0.0.1',
                              database='shop')
cursor = connect.cursor()

for y in range(0,counter):
    add_product = ("INSERT INTO product ( mall_no, product_name,"
                   "product_price, product_image, product_link) VALUES ('1', '" + product_name[y] + "',"
                    " '" +product_price[y] + "',"
                    " '" + product_pic[y] + "', '" + product_linka[y] + "');")

    # 새로운 제폼 입력
    cursor.execute(add_product)
    connect.commit()



cursor.close()
connect.close()


