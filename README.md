GoyGoyEdu
================================
A PoC University system with symfony 2
Note: this project is under-development

RoadMap

 1. Auth
     2. Login
     3. Register
         4. Student Register
         5. Stuff Register
         6. Person Get Roles
    -- thats v 0.2,
    
  
 2. Student Affairs(Admin)
    
    3. Constraint Management
    4. Add Faculty
    5. Edit/Delete Faculty
    6. Add Department
    7. Edit Department
    8. Edit/Delete Department
    9. Insert Lesson
    10. Edit/Delete Lesson
    11. Add Term
    12. Delete Term
    13. Register Lesson To Term
    14. Delete Lesson To Term
    -- thats v 0.3,
 3. Student Affairs(Teacher)
    
    4. Add Lesson To Thyself
    4. Give Part Grade To Lessons(max 100%)
    --thats v 0.4,
 4. Student Affairs(Student)
     
     5. Course Registrations
     6. See self grades
     7. See Transcript
     8. See Catalog
     --thats v0.5,
 5. Probation System(Student)
     6. See Probations
     7. Add Probation
     8. update Probation(may can't do this due time)
     --thats v0.6
 6. Portal(Management)
     7. Add Page
     8. Edit/Delete Page
     9. Add Link
     10. Edit/Delete Page
     11. Add Custom Page(ex. someController)
     12. Edit/Delete Custom Page
     13. Custom Themes
     --thast v0.7
 7. Api
     8. All Methods Must turn into api with OAUTH(REST - JSON)
    --thats v0.8
 8. Web(Public)
     9. All web pages should be public via api
    --thats v0.9
 9. Tests
     10. All methods has test functions
     --thats v1.0a

    
 

instalation
> $ php app/console generate:doctrine:entities GoyGoyEduPortalBundle --no-backup

> $ php app/console doctrine:schema:update --force

