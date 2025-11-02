# SELENIUM

from selenium import webdriver # contains classes to control browsers.
from selenium.webdriver.edge.service import Service
# from selenium.webdriver.chrome.service import Service //Import for Chrome

# Driver Setup

# Chrome Driver
# service_obj = Service()
# driver = webdriver.Chrome(service=service_obj)

# To Keep Browser Open Indefinitely
options = webdriver.EdgeOptions()
options.add_experimental_option("detach", True)

# Edge Driver
service_obj = Service()
driver = webdriver.Edge(options=options, service=service_obj)

# Browser Open and Access

driver.maximize_window()
#driver.minimize_window()

driver.get("http://www.google.com")  # To open the browser and go to the link

print(driver.title)
print(driver.current_url)

driver.get("http://www.facebook.com")

driver.back()  # Moves to Google
driver.forward()  # Moves to Facebook

driver.refresh()  # Reload

driver.close()  # Closes Browser
