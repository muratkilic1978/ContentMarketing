


SELECT `subscriber`.`firstname`, `subscriber`.`email`, `news_category`.`category`
FROM subscriber
INNER JOIN signsup ON
`subscriber`.`id` = `signsup`.`subscriber_id`
INNER JOIN news_category ON
`signsup`.`news_category_id` = `news_category`.`id`
WHERE category IN ('Music');




SELECT `subscriber`.`firstname`, `subscriber`.`email`, `news_category`.`category`, `newsletter`.`title`
FROM subscriber
INNER JOIN signsup ON
`subscriber`.`id` = `signsup`.`subscriber_id`
INNER JOIN news_category ON
`signsup`.`news_category_id` = `news_category`.`id`
INNER JOIN newsletter ON
`news_category`.`id` =`newsletter`.`category_id`
WHERE category IN ('Sport');