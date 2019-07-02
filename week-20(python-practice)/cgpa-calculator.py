def cgpaCalculator():
    #maps courses to their respective number of units 
    coursesAndUnits={}
    #maps courses to the grades obtained (i.e A,B,C,D)
    coursesAndGrades={}
    #maps grades to points
    gradesAndPoints = {"A":5,"B":4,"C":3,"D":2,"E":1}
    #the total number of units obtained by the student , i.e the course unit multiplied by the grade
    totalUnitsAcquired = 0
    #total number of units available for that semester
    totalUnitsAvailable = 0
    cgpa=0
    numberOfCourses= input("Please enter the number of courses \n")
    for i in range(0,int(numberOfCourses)):
        #for each of the courses , we want to get the course code , number of units and grade obtained
        courseCode= input("Please enter the course code \n")
        courseUnits = input("Please enter the number of units \n")
        courseGrade = input("Please enter the grade \n").upper()
        coursesAndUnits[courseCode]=courseUnits
        coursesAndGrades[courseCode]=courseGrade

    for course,units in list(coursesAndUnits.items()):
        #we convert the grades to the number of points they carry
        totalUnitsAvailable += int(units) 
        totalUnitsAcquired += (int(units) * gradesAndPoints[coursesAndGrades[course]])
    cgpa = round((totalUnitsAcquired / totalUnitsAvailable),2)
    print(f" You registered {numberOfCourses} courses and your cgpa is {cgpa} . ")
cgpaCalculator()
