from selenium import webdriver
from selenium.webdriver.edge.service import Service
from selenium.webdriver.common.by import By

# To Keep Browser Open Indefinitely
options = webdriver.EdgeOptions()
options.add_experimental_option("detach", True)

# Edge Driver
service_obj = Service()
driver = webdriver.Edge(options=options, service=service_obj)

# Browser Tasks
driver.maximize_window()
driver.get("http://rahulshettyacademy.com/angularpractice/")


# _____________________________________________________________________
# ____________________________ tashin here ____________________________
# _____________________________________________________________________



# Locator -> ID, CLASS_NAME, NAME, XPATH, CSSSelector, Link

# Data Send
driver.find_element(By.CLASS_NAME, "form-control").send_keys("Somik")  # class name
driver.find_element(By.NAME, "email").send_keys("sss@gmail.com")  # Name
driver.find_element(By.ID, "exampleInputPassword1").send_keys("1234") # ID  

# Click   - Chechbox
driver.find_element(By.ID, "exampleCheck1").click()


# clear any input field value/data
driver.find_element(By.ID, "exampleInputPassword1").clear()  # Clears field


# XPATH -> //tagname[@attribute='value']
# Password -> //input[@type='password']
driver.find_element(By.XPATH, "//input[@type='password']").send_keys("5678")



# CSSSelector -> tagname[attribute='value']

driver.find_element(By.ID, "exampleInputPassword1").clear()  # Clears field

# Password -> //input[@type='password']
driver.find_element(By.CSS_SELECTOR, "input[type='password']").send_keys("1111")




# ================ Indexing / Hierarchy ================ 
# XPATH -> //input[@type='text'] -> 3 Components (Name, Email, Last Box)
#                                                   1     2        3


driver.find_element(By.XPATH, "(//input[@type='text'])[1]").clear()   

driver.find_element(By.XPATH, "(//input[@type='text'])[1]").send_keys("Tom")  # 1-Indexed
driver.find_element(By.XPATH, "(//input[@type='text'])[2]").clear()
driver.find_element(By.XPATH, "(//input[@type='text'])[2]").send_keys("tom@gmail.com")



# Drop-Down
driver.find_element(By.ID, "exampleFormControlSelect1").send_keys("Female")






# Link  click - navbar item click
driver.find_element(By.LINK_TEXT, "Shop").click()


# Confirmation
driver.find_element(By.CLASS_NAME, "btn").click()



msg = driver.find_element(By.CLASS_NAME, "alert").text  # Text Retrieve
print(msg)

assert "Success" in msg
# assert "asdosadisahodas" in msg  # Assert exception if test condition fails



# If "msg" contains "Form submitted successfully!",
# then "Success" in "msg" → True, so nothing happens.
# else
# If "msg" contains "Error: invalid input",
# then "Success" in "msg" → False, so Python raises an AssertionError and stops the program.

