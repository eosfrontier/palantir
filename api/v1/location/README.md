
# /palantir/api/v1/location/
looks up locations in the database with provided information

## Resource URL
api/palantir/api/v1/location/

## Resource Information
|||
|--|--|
|Response formats | JSON |
|Requires authentication?| Yes |
|Rate limited? | No |

|Method | Description |
| --- | ---
| GET | Gets location data.
<!-- | POST | Adds new character
| DELETE | Sets character **id** to deleted status
| UPDATE | Updates character record for character with **id** -->

## Parameters
| Name | Description | Required For | Optional For | Example
|--|--|--|--|--
token | provides authentication | All Methods | | 
id | (OPTIONAL) location ID to GET | | GET | 42
all_data | (OPTIONAL) Declare this header to retrieve all active locations. No value needed. | | GET | 

