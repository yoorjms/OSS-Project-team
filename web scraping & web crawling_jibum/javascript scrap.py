from selenium import webdriver
chrome_path = r"C:\Users\com\Documents\chromedriver.exe"

# driver = webdriver.Chrome(chrome_path)
# driver.get("http://vancouver.craigslist.com")
# driver.find_element_by_xpath("""//*[@id="sss0"]/li[22]/a""").click()

driver = webdriver.Chrome(chrome_path)
driver.get("http://www.4xr.co.kr/")
driver.find_element_by_xpath("""//*[@id="ddmenu"]/ul/li[3]/a""").click()

# posts = driver.find_elements_by_class_name("MS_prod_img_s")
# print(posts)
#//*[@id="footer"]/div[2]/div/div[3]/div/div[1]/ul/li[2]/a
# for post in posts:
#     print(post.text)