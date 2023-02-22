--А
SELECT l.id as lesson_id, c.title as cours_name,  l.title as lesson_name, l.description as lesson_desc
FROM lessons AS l
         JOIN courses AS c ON l.cours_id = c.id;

--B
SELECT s.id as students_id, c.title as cours_name, c.start_date as start_date, c.end_date as end_date, s.name as name_student, s.phone, s.country
FROM students AS s
         JOIN students_courses ON students_courses.students_id = s.id
         JOIN courses AS c ON c.id = students_courses.courses_id;
