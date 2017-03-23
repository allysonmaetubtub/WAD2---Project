# WAD2---Project
BSIS2 - Web Application Development 2

## A++ The better way of recording their grades.
Nowadays, majority of the well-known professions are upgrading when it comes to data storage and manipulation. It is must now for a person to be a computer-literate. But how come that not the greater number of teachers are using our modern technology in dealing with the most complicated tasks they have been always working with. And that is one of the reasons for the creation of this project - the A++. 
This web application is primarily made for teachers, for helping them having a modernized way of tracking and storing their student records. By using this application, there is a great possibility of lessening their burden, when it comes to manually recording each of the students’ data to a record book. 

## DESCRIPTION AND SCOPE
The scope of the system is to have an interaction between the normal users and the admin. Normal users are the teachers who use the application for their records while the admin is the school administration, which manages the overall information systems.

A++ is an application that can help the school management to monitor all the students of a specific school. The application’s main function is to provide an interface that a teacher can use in recording, computing and storing all of his/her students in an easy and accurate way. A specific user, the teacher rather, can input the names of the student within her class and manage their grades in this organized application. Special features include Teacher profile, Students profile and a table for each class or section. Students’ records can also be viewed individually and can be modified for changes. Additionally, its functionalities are only accessible for the teachers and the school admin, for it requires the teacher ID and a password, strictly to be provided by the school management.
Grading System is very useful, for the reason that it is broad and functional. This may lead to a qualitative and reliable for it is a big help for a school. 


## OVERVIEW OF THE SYSTEM

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/log%20in.jpg "LOG IN PAGE"

**_LOG IN_**
-where the users log into the application by entering their teacher ID and password
-in case of forgotten password, there is a possibility that an unassured user cannot proceed to the next page
-if a user isn't a member yet, he can register by pressing the **REGISTER** button located at the upper right part of the page, and will be reviewed by the admin, for the assurance of the authorization of the user.

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/signed%20in.jpg "HOME PAGE"

**_HOME_**
-once the user has logged in, (either by having an exsisting account or by the register function) he can now proceed to this page
-contains a button at a center for the list of students
-hoverable buttons at the upper right corner, when clicked, dropdowns a menu - PROFILE and LOG OUT.

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/user-profile-view.jpg "USER PROFILE"

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/user-profile-view-edit.jpg "EDIT USER PROFILE"

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/user-profile-view-edit-saved.jpg "SAVED USER PROFILE"

**_USER PROFILE_**
-can be viewed, changed, and saved
-contains the necessary brief information about the user

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/log%20out.jpg "LOG OUT"

**_LOG OUT_**
-for logging out, and leaving the page
-by clicking it, the user will be redirected to the LOG IN page

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/records.jpg "MY STUDENTS BUTTON"

**_MY STUDENTS - BUTTON_**
-shows the overall record of a class/section
-shows student name, section, and final grade
-for an easy browse and reference
-contains buttons - ADD STUDENT(upper right of the table), VIEW, EDIT, DELETE

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/record-new.jpg "ADD A STUDENT"

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/record-invalid.jpg "VALIDATION"
**_ADD A STUDENT_**
-generates a form for the additional student
-authenticates inputted values and informs the user for invalidity
-automatically adds the student to the list after pressing the SAVE button

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/record-edit.jpg "EDIT"

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/record-edited-saved.jpg "UPDATED"

**_EDIT BUTTON_**
-generates a form, with the current values of the selected student on the field
-authenticates inputted values and informs the user for invalidity
-automatically updates the list of the edited student record
-generates a flash message to inform the user that the change has been modified successfully

![alt text][logo]

[logo]: https://github.com/allysonmaetubtub/WAD2---Project/blob/master/screenshots/record-deleted.jpg "DELETE"

**_DELETE BUTTON_**
-red-colored to indicate warning to the user
-soft delete function which provides a back up on the database
-generates a flash message that the selected row has been deleted successfully
