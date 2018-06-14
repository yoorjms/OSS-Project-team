from selenium import webdriver
from selenium.webdriver.common.keys import Keys

chrome_path = r"C:\Users\lab\Downloads\chromedriver_win32\chromedriver.exe"

driver = webdriver.Chrome(chrome_path)
# driver.get("http://vancouver.craigslist.com")
# driver.find_element_by_xpath("""//*[@id="sss0"]/li[22]/a""").click()

#driver = webdriver.Chrome(chrome_path)
#driver.get("http://www.4xr.co.kr/")
#driver.find_element_by_xpath("""//*[@id="ddmenu"]/ul/li[3]/a""").click()

# posts = driver.find_elements_by_class_name("MS_prod_img_s")
# print(posts)
#//*[@id="footer"]/div[2]/div/div[3]/div/div[1]/ul/li[2]/a
# for post in posts:
#     print(post.text)
driver.get("http://www.hellosweety.co.kr/index.html")
driver.find_element_by_xpath("""//*[@id="mlc"]/div/div[1]/form/fieldset/a/input""").click()
element = driver.find_element_by_name("prize1")
driver.execute_script("arguments[0].value = '티';",element)
driver.find_element_by_xpath("""//*[@id="search_form"]/fieldset/div/table/tbody/tr[1]/td[2]/div/a""").click()

posts = driver.find_elements_by_class_name("MS_prod_img_l")
for post in posts:
    print(post.get_attribute('src'))
nametemp = post.get(' ')