#function to find the prime numbers between 0 and a given number 
def findPrimeNumbers(N):
    #list to hold the prime numbers
    list = []
    #counter to hold the number of factors per number in the list
    counter = 0
    #iterate through the numbers
    for number in range(0,(N +1)):
        #for each number , we check for factors between 1 and N
        for i in range(1,N+1):
            if number % i == 0 :
                #if a factor is found , increment the counter
                counter += 1
        #if the number of factors is less than or equal to 2 ( i.e it is only divisible by itself and 1 ) , it is a prime number and it is added to the list
        if counter == 2:
            list.append(number)
        #reset the counter for each number
        counter = 0           
     #return list containing the prime numbers   
    return list
print(findPrimeNumbers(100))       