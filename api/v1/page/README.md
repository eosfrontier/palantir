
# /palantir/api/v1/page/
looks up pages in the database with provided information

## Resource URL
api/palantir/api/v1/page/

## Resource Information
|||
|--|--|
|Response formats | JSON |
|Requires authentication?| Yes |
|Rate limited? | No |

|Method | Description |
| --- | ---
| GET | Gets page data.
<!-- | POST | Adds new character
| DELETE | Sets character **id** to deleted status
| UPDATE | Updates character record for character with **id** -->

## Parameters
| Name | Description | Required For | Optional For | Example
|--|--|--|--|--
token | provides authentication | All Methods | | 
id | (OPTIONAL) page ID to GET | | GET | 42
all_data | (OPTIONAL) Declare this header to retrieve all active pages. No value needed. | | GET | 

