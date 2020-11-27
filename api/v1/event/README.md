
# /palantir/api/v1/event/
looks up events in the database with provided information

## Resource URL
api/palantir/api/v1/event/

## Resource Information
|||
|--|--|
|Response formats | JSON |
|Requires authentication?| Yes |
|Rate limited? | No |

|Method | Description |
| --- | ---
| GET | Gets event data.
<!-- | POST | Adds new character
| DELETE | Sets character **id** to deleted status
| UPDATE | Updates character record for character with **id** -->

## Parameters
| Name | Description | Required For | Optional For | Example
|--|--|--|--|--
token | provides authentication | All Methods | | 
id | (OPTIOAL) Event ID to GET | | GET | 42
all_events | (OPTIONAL) Declare this header to retrieve all active events. No value needed. | | GET | 

