from selenium import webdriver
from selenium.webdriver.common.keys import Keys

chrome_path = r"C:\Users\com\Documents\chromedriver.exe"

# driver = webdriver.Chrome(chrome_path)
# driver.get("http://vancouver.craigslist.com")
# driver.find_element_by_xpath("""//*[@id="sss0"]/li[22]/a""").click()

driver = webdriver.Chrome(chrome_path)
driver.get("http://www.okkane.co.kr/")

#search by send keys
driver.find_element_by_xpath("""//*[@id="destroy"]/div/div[1]/div[1]/div/form/fieldset/a""").click()
element = driver.find_element_by_name("prize1")
driver.execute_script("arguments[0].value = '티';",element)
driver.find_element_by_xpath("""//*[@id="search_form"]/fieldset/div/table/tbody/tr[2]/td/a""").click()

posts = driver.find_elements_by_class_name("MS_prod_img_s")
for post in posts:
    print(post.get_attribute('src'))

nametemp = post.get('')

#search_form.send_keys('티')
# search_form.submit()

# posts = driver.find_elements_by_class_name("MS_prod_img_s")
# print(posts)
#//*[@id="footer"]/div[2]/div/div[3]/div/div[1]/ul/li[2]/a
# for post in posts:
#     print(post.text)