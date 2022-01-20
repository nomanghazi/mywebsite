#iporting Random Library 

import random
import string
# Giving it the range 

#here to get Input From User 
u_pass=input("Enter Your Password\n")
#in this line of code we are using join function to randmize the user input 
a="".join(random.sample(u_pass,10))
#here is the Result
print(f"This Is Your PAssword   :: {a}")

















# import random
# import array
# MAX_LEN = 12

# user_input=input("Enter Password")

# temp_pass=random.choice(user_input)
# for x in range(MAX_LEN - 4):
#     temp_pass =random.choice(temp_pass)

#     temp_pass_list = array.array('u', temp_pass)
#     random.shuffle(temp_pass_list)
# password = ""
# for x in temp_pass_list:
#         password = password + x
# print(password)


