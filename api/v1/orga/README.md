
# /palantir/api/v1/orga/
looks up orgas in the database with provided information

## Resource URL
api/palantir/api/v1/orga/

## Resource Information
|||
|--|--|
|Response formats | JSON |
|Requires authentication?| Yes |
|Rate limited? | No |

|Method | Description |
| --- | ---
| GET | Gets orga data.
<!-- | POST | Adds new character
| DELETE | Sets character **id** to deleted status
| UPDATE | Updates character record for character with **id** -->

## Parameters
| Name | Description | Required For | Optional For | Example
|--|--|--|--|--
token | provides authentication | All Methods | | 
id | (OPTIONAL) orga ID to GET | | GET | 42
all_orgas | (OPTIONAL) Declare this header to retrieve all active orgas. No value needed. | | GET | 

