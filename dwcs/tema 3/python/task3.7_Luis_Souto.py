class Person:
    def __init__(self, id, name, age):
        self.id = id
        self.name = name
        self.age = age

    def __str__(self):
        return f"Person[ID: {self.id}, Name: {self.name}, Age: {self.age}]"


class Student:
    def __init__(self, id, person, degree):
        self.id = id
        self.person = person
        self.degree = degree

    def __str__(self):
        return f"Student[ID: {self.id}, {self.person}, Degree: {self.degree}]"


class StudentGroup:
    def __init__(self, id, group_name):
        self.id = id
        self.group_name = group_name
        self.students = []

    def add_student(self, student):
        self.students.append(student)

    def remove_student(self, student_id):
        self.students = [s for s in self.students if s.id != student_id]

    def __str__(self):
        student_info = "\n  ".join(str(s) for s in self.students)
        return f"StudentGroup[ID: {self.id}, Group Name: {self.group_name}]\n  Students:\n  {student_info}"


# Creating three different students
student1 = Student(1, Person(1, "Alice", 20), "Computer Science")
student2 = Student(2, Person(2, "Bob", 21), "Mathematics")
student3 = Student(3, Person(3, "Charlie", 22), "Physics")

# Displaying the students' information
print("Students Information:")
print(student1)
print(student2)
print(student3)

# Creating a student group and adding the students
studentGroup = StudentGroup(1, "Group A")
studentGroup.add_student(student1)
studentGroup.add_student(student2)
studentGroup.add_student(student3)

# Displaying the student group information
print("\nStudent Group Information after adding students:")
print(studentGroup)

# Removing a student from the group
studentGroup.remove_student(2)
print("\nStudent Group Information after removing student with ID 2:")
print(studentGroup)

# Adding a new student to the group
newStudent = Student(4, Person(4, "David", 23), "Chemistry")
studentGroup.add_student(newStudent)
print("\nStudent Group Information after adding a new student:")
print(studentGroup)
