Unclear if the User model will contain all the fields which are filterable or that all the data will be saved in json for example and we have to filter through the json.
Also unclear if you need to filter on the added relation field, so for example; All users where address->street_name is "amsterdamseweg", if so the trait would need a change.
