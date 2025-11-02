from selenium import webdriver
from selenium.webdriver.edge.service import Service
from selenium.webdriver.common.by import By
import time  # Can be used for delay

service_obj = Service()

# To Keep Browser Open Indefinitely
options = webdriver.EdgeOptions()
options.add_experimental_option("detach", True)

driver = webdriver.Edge(options=options, service=service_obj)

driver.maximize_window()
driver.get("http://www.uiu.ac.bd")

driver.find_element(By.LINK_TEXT, "Important Contact").click()

time.sleep(5)  # Delay

# Can get all elements of a div
elements = driver.find_elements(By.CLASS_NAME, "section-wrapper")

for E in elements:
    print(E.text)
