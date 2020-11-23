
# api/palantir/v1/event/
looks up events in the database with provided information

## Resource URL
api/palantir/v1/event/

## Resource Information
|||
|--|--|
|Response formats | JSON |
|Requires authentication?| Yes |
|Rate limited? | No |

|Method | Description |
| --- | ---
| GET | Gets character with ID **id**
<!-- | POST | Adds new character
| DELETE | Sets character **id** to deleted status
| UPDATE | Updates character record for character with **id** -->

## Parameters
| Name | Description | Required For | Optional For | Example
|--|--|--|--|--
token | provides authentication | All Methods | | 
id | Event ID to GET | | GET | 42
all_events | Declare this header to retrieve all active events. No value needed. | | GET | 

