# About GraphQL API

# Notice
```
 {
   noticeCategory(id:1){
     	id
       english_name
 			bangla_name
     	notices{
         category_id
         bangla_title
         english_title
         bangla_description
         english_description
         is_published
         published_date
         featured_image_link
         is_ticker
         ticker_link
         is_featured
       }
 	}
 }

 {
   noticeCategories
   {
     	id
       english_name
       bangla_name
       number_of_notice
     	notices{
         category_id
         bangla_title
         english_title
         bangla_description
         english_description
         is_published
         published_date
         featured_image_link
         is_ticker
         ticker_link
         is_featured
       }
   }
 }


 {
   notices(first: 10, page:1){
      data{
 				id
       category_id
       category{
         id
         english_name
         bangla_name
       }
       bangla_title
       english_title
       bangla_description
       english_description
     }
     paginatorInfo{
       perPage
       firstItem
       lastPage
       currentPage
       hasMorePages
       total
       count
     }
   }
 }


 {
   notice(id: 10){
      id
       category_id
       category{
         id
         english_name
         bangla_name
       }
       bangla_title
       english_title
       bangla_description
       english_description
   }
 }
```


##  News 
```
 {
   news(first:10){
     data{
       id
       bangla_title
       english_title
       featured_image_link
       bangla_detail
       english_detail
       published_date
     }

     paginatorInfo{
       perPage
       firstItem
       lastPage
       currentPage
       hasMorePages
       total
       count
     }
   }
 }

 {
   singleNews(id:10){
     id
       bangla_title
       english_title
       featured_image_link
       bangla_detail
       english_detail
       published_date
   }
 }
```

#  Management Committee 
```
 {
   ManagementCommitteeMembers(first:10){
     data{
       id
       english_name
       english_designation
       bangla_name
       bangla_designation
       contact_number
       email
       priority
       image
     }

     paginatorInfo{
       perPage
       firstItem
       lastPage
       currentPage
       hasMorePages
       total
       count
     }
   }
 }

 {
   ManagementCommitteeMember(id:10){
      id
       english_name
       english_designation
       bangla_name
       bangla_designation
       contact_number
       email
       priority
       image
   }
 }
```

# file uploads
```
 {
   fileuploadsCategory(id:2){
     	id
       english_name
 			bangla_name
     	files{
         id
         bangla_title
 				english_title
       }
 	}
 }

 {
   fileuploadCategories{
     	id
       english_name
 			bangla_name
   }
 }

 {
   fileuploads(first: 10, page:1){
      data{
 				id
       category_id
         bangla_title
         english_title
       category{
         id
         english_name
         bangla_name
       }
     }
     paginatorInfo{
       perPage
       firstItem
       lastPage
       currentPage
       hasMorePages
       total
       count
     }
   }
 }


 {
   fileupload(id:1){
 			id
       category_id
       bangla_title
       english_title
       category{
         id
         english_name
         bangla_name
       }
   }
 }
```



# Event
```
 {
   eventCategory(id:1){
     	id
       english_name
 			bangla_name
     	events{
         id
         bangla_title
         english_title
         bangla_description
         english_description
       }
 	}
 }

 {
   eventCategories{
     	id
       english_name
 			bangla_name
     	number_of_event
   }
 }

 {
   events(first: 10, page:1){
      data{
				id
       category_id
       category{
         id
         english_name
         bangla_name
       }
       bangla_title
       english_title
       bangla_description
       english_description
       bangla_venue
       english_venue
       from_datetime
       to_datetime
     }
     paginatorInfo{
       perPage
       firstItem
       lastPage
       currentPage
       hasMorePages
       total
       count
     }
   }
 }
```

#  Message 
```
 {
   messages(first: 10, page:1){
      data{
         id
         bangla_title
         english_title
         english_designation
         bangla_designation
         english_name
         bangla_name
         english_message
         bangla_message
         image
         created_at
         updated_at
     }
     paginatorInfo{
       perPage
       firstItem
       lastPage
       currentPage
       hasMorePages
       total
       count
     }
   }
 }

 {
   message(id: 10){
         id
         bangla_title
         english_title
         english_designation
         bangla_designation
         english_name
         bangla_name
         english_message
         bangla_message
         image
         created_at
         updated_at
   }
 }
```
# Achievement
```
 {
   achievement(id: 10){
     id
     bangla_title
     english_title
     featured_image_link
     bangla_detail
     english_detail
     published_date
   }
 }
```
