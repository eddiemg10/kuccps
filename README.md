# COMPLETED API ROUTES


**Courses**

- `/api/courses`
 >Get all unique courses offered by universities

 <details>
 <summary>Response format</summary>
 
 ```json
[
    {
     "id" : 1,
     "name" : "BACHELOR OF ARTS",
     "holland_code" : "code",
     "created_at" : "2022-10-01 15:16:57",
     "updated_at" : "2022-10-01 15:16:57",
    },
       {
     "id" : 2,
     "name" : "BACHELOR OF ARCHITECTURAL STUDIES",
     "holland_code" : "code",
     "created_at" : "2022-10-01 15:16:57",
     "updated_at" : "2022-10-01 15:16:57",
    } 
]
 ```
</details>

 
- `/api/courses/{id}`
 >Get details of one course by its id
 
 <details>
 <summary>Response format</summary>
 
 ```json
{
 "id" : 11,
 "name" : "BACHELOR OF SCIENCE (BIOLOGY)",
 "holland_code" : "code",
 "created_at" : "2022-10-01 15:16:57",
 "updated_at" : "2022-10-01 15:16:57",
}
 ```
</details>
