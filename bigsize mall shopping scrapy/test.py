from selenium import webdriver
from selenium.webdriver.common.keys import Keys
chrome_path = r"D:\선희\3학년\오픈소스 SW\chromedriver_win32\chromedriver.exe"

# driver = webdriver.Chrome(chrome_path)
# driver.get("http://vancouver.craigslist.com")
# driver.find_element_by_xpath("""//*[@id="sss0"]/li[22]/a""").click()

driver = webdriver.Chrome(chrome_path)
driver.get("http://canmart.co.kr/")
driver.find_element_by_xpath("""//*[@id="searBox"]/form/fieldset/div/a""").click()
#river.find_element_by_xpath("""//*[@id="cate_top"]/a""").click()
element = driver.find_element_by_name("prize1")
driver.execute_script("arguments[0].value = '티';",element)
driver.find_element_by_xpath("""//*[@id="search_form"]/fieldset/div/table/tbody/tr[3]/td/a""").click()

#posts = driver.find_elements_by_class_name("MS_prod_img_s")

#for post in posts :
 #   print(post.get_attribute('src'))

#nametemp = post.get(' ')



# posts = driver.find_elements_by_class_name("MS_prod_img_s")
# print(posts)
#//*[@id="footer"]/div[2]/div/div[3]/div/div[1]/ul/li[2]/a
# for post in posts:
#     print(post.text)