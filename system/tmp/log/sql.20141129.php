<?php die();?> 
20141129 14:56:54: /install.php

20141129 14:57:01: /install.php?m=install&f=step1

20141129 14:57:03: /install.php?m=install&f=step2

20141129 14:57:03: /install.php

20141129 14:57:24: /install.php?m=install&f=step3

20141129 14:57:24: /install.php?m=install&f=step4

20141129 14:57:27: /install.php?m=install&f=step4
  INSERT INTO mz_user SET `account` = 'admin',`realname` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`admin` = 'super',`join` = '2014-11-29 14:57:27'
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'version',`value` = '3.1'

20141129 14:57:27: /install.php?m=install&f=step5
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'lang',`value` = 'zh-cn'

20141129 15:58:15: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:15' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:15' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:15' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 15:58:16: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:16' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:16' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:16' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 15:58:20: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:20' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:20' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:20' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 15:58:41: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 15:58:48: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:48' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:48' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:58:48' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 15:59:25: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:25' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:25' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:25' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 15:59:26: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:26' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:26' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:26' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 15:59:34: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:34' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:34' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 15:59:34' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 15:59:57: 
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:00:16: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:00:16: /api.php?m=user&f=deny&module=tuan&method=getdetail
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_deny') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:00:21: /api.php?m=index&f=index
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:00:21' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:00:21' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:00:21' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:00:25: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:00:39: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:00:40: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:00:55: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:01: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:23: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:24: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:25: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:25: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:25: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:29: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:29: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:30: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:48: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:49: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:50: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:50: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:01:58: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:02:00: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:02:02: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:02:04: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:02:05: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:02:29: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id` = '1' 

20141129 16:04:13: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:05:28: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_index') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:05:30: /api.php?m=tuan&a=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id` = '1' 

20141129 16:05:34: /api.php?m=tuan&f=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_index') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:05:37: /api.php?m=tuan&a=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id` = '1' 

20141129 16:08:10: /api.php?m=tuan&a=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id` = '1' 

20141129 16:14:57: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:15:07: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:22:03: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:22:11: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:22:45: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE id=1 and categoryid=2 and uid=1 

20141129 16:22:58: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE id=1 and categoryid=2 and uid=1 

20141129 16:23:14: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE id=1 and categoryid=2 and uid=1 
  SELECT * FROM mz_tuan WHERE id=1 and categoryid=2 and uid=1 

20141129 16:23:32: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id`=1 and `categoryid`=2 and `uid`=1 
  SELECT * FROM mz_tuan WHERE `id`=1 and `categoryid`=2 and `uid`=1 

20141129 16:24:10: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id`=1 and `categoryid`=2 and `uid`=1 
  SELECT * FROM mz_tuan WHERE `id`=1 and `categoryid`=2 and `uid`=1 

20141129 16:24:11: /api.php?m=tuan&a=getList&id=1&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id`=1 and `categoryid`=2 and `uid`=1 
  SELECT * FROM mz_tuan WHERE `id`=1 and `categoryid`=2 and `uid`=1 

20141129 16:24:15: /api.php?m=tuan&a=getList&categoryid=2&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `categoryid`=2 and `uid`=1 
  SELECT * FROM mz_tuan WHERE `categoryid`=2 and `uid`=1 

20141129 16:24:31: /api.php?m=tuan&a=getList&categoryid=3&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `categoryid`=3 and `uid`=1 
  SELECT * FROM mz_tuan WHERE `categoryid`=3 and `uid`=1 

20141129 16:24:44: /api.php?m=tuan&a=getList&categoryid=3&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `categoryid`=3 and `uid`=1 

20141129 16:24:54: /api.php?m=tuan&a=getList&categoryid=3&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `categoryid`=3 and `uid`=1 

20141129 16:25:33: /api.php?m=tuan&a=getList&categoryid=3&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `categoryid`=3 and `uid`=1 

20141129 16:32:54: /api.php?m=secondhand&a=getList&type=0&uid=2
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','secondhand_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_secondhand WHERE `type`=0 and `uid`=2 

20141129 16:33:06: /api.php?m=secondhand&a=getList&type=0&uid=2
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','secondhand_getlist') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:33:12: /api.php?m=tuan&a=getList&categoryid=3&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `categoryid`=3 and `uid`=1 

20141129 16:33:13: /api.php?m=tuan&a=getList&categoryid=3&uid=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','tuan_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `categoryid`=3 and `uid`=1 

20141129 16:33:18: /api.php?m=secondhand&a=getList&type=0&uid=2
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','secondhand_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_secondhand WHERE `type`=0 and `uid`=2 

20141129 16:33:48: /api.php?m=secondhand&a=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','secondhand_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_tuan WHERE `id` = '1' 

20141129 16:34:15: /api.php?m=secondhand&a=getDetail&id=1
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','secondhand_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_secondhand WHERE `id` = '1' 

20141129 16:43:49: /api.php?m=shop&a=getDetail&id=3
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','shop_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_secondhand WHERE `id` = '3' 

20141129 16:44:20: /api.php?m=shop&a=getDetail&id=3
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','shop_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_shop WHERE `id` = '3' 

20141129 16:44:35: /api.php?m=shop&a=getDetail&id=3
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','shop_getdetail') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_shop WHERE `id` = '3' 

20141129 16:45:09: /api.php?m=shop&a=getList&uid=3
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','shop_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_secondhand WHERE `uid`=3 

20141129 16:45:40: /api.php?m=shop&a=getList&uid=3
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','shop_getlist') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_shop WHERE `uid`=3 

20141129 16:52:06: /
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:06' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:06' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:06' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:52:13: /admin.php
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:52:13: /admin.php?m=user&a=login&referer=L2FkbWluLnBocA==
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:52:14: /admin.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_user WHERE account  = 'admin'
  UPDATE mz_user SET `id` = '1',`account` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`realname` = 'admin',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:14',`fails` = '0',`referer` = '',`join` = '2014-11-29 14:57:27',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0' WHERE account  = 'admin'

20141129 16:52:14: /admin.php?m=admin&a=index
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:52:16: /admin.php?m=site&a=setbasic
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:52:21: /admin.php?m=site&a=setbasic
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'type',`value` = 'portal'
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'name',`value` = '蝉知企业门户系统'
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'moduleEnabled',`value` = 'user'
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'lang',`value` = 'zh-cn'
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'copyright',`value` = ''
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'keywords',`value` = ''
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'indexKeywords',`value` = ''
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'slogan',`value` = ''
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'desc',`value` = ''
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icp',`value` = ''
  REPLACE mz_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpLink',`value` = 'http://www.miitbeian.gov.cn'
  SELECT * FROM mz_config WHERE 1 = 1  AND owner IN ('system') AND module IN ('common') AND section IN ('site') AND `key` IN ('lang')

20141129 16:52:22: /
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:22' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:22' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:22' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:52:23: /admin.php?m=site&a=setbasic
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:52:23: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:52:25: /index.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = 'admin'
  UPDATE mz_user SET `id` = '1',`account` = 'admin',`password` = '86f3059b228c8acf99e69734b6bb32cc',`realname` = 'admin',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '3',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:25',`fails` = '0',`referer` = '',`join` = '2014-11-29 14:57:27',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0' WHERE account  = 'admin'

20141129 16:52:25: /
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:25' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:25' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:25' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:52:25: /index.php?m=message&a=notify&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:52:33: /index.php?m=user&a=logout
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_logout') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:52:33: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:52:34: /index.php?m=user&a=register
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_register') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:52:52: /index.php?m=user&a=register
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_register') AND template  = 'default'
  SELECT * FROM mz_block
  INSERT INTO mz_user SET `account` = 'azhi',`realname` = '陈聪智',`email` = '382455292@qq.com',`company` = '',`phone` = '',`referer` = '',`join` = '2014-11-29 16:52:52',`last` = '2014-11-29 16:52:52',`visits` = '1',`password` = '0a5656f130702beb94142984b1f499ff'
  SELECT * FROM mz_user WHERE account  = 'azhi'
  UPDATE mz_user SET `id` = '2',`account` = 'azhi',`password` = '0a5656f130702beb94142984b1f499ff',`realname` = '陈聪智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '382455292@qq.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:52',`fails` = '0',`referer` = '',`join` = '2014-11-29 16:52:52',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0' WHERE account  = 'azhi'

20141129 16:52:53: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 16:52:53: /index.php?m=index&a=index
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:53' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:53' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 16:52:53' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 16:52:53: /index.php?m=message&a=notify&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 16:58:24: /admin.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:02:04: /admin.php?m=user&a=admin
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT u.*, o.provider as provider, openID as openID FROM mz_user AS u  LEFT JOIN mz_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM mz_user AS u  LEFT JOIN mz_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM mz_user AS u  LEFT JOIN mz_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20141129 17:08:05: /admin.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:14:06: /admin.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:20:07: /admin.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:20:32: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:20:50: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:21:32: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:21:34: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:21:49: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:21:59: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:22:04: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:22:18: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:25:38: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:26:04: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:26:04: /api.php?m=index&a=index
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:26:04' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:26:04' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:26:04' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:26:04: /api.php?m=message&a=notify&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','message_notify') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT COUNT(*) as count FROM mz_message WHERE `to`  = 'azhi' AND readed  = '0'

20141129 17:26:08: /admin.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:26:18: /api.php?m=user&a=logout
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_logout') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:26:18: /api.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:27:11: /api.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:27:17: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:32:09: /admin.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:33:30: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '2',`account` = '18250813004',`password` = '0a5656f130702beb94142984b1f499ff',`realname` = '陈聪智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '382455292@qq.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:52',`fails` = '1',`referer` = '',`join` = '2014-11-29 16:52:52',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE id  = '2'

20141129 17:33:55: /api.php?m=user&a=logout
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_logout') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:33:55: /api.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:33:59: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '2',`account` = '18250813004',`password` = '0a5656f130702beb94142984b1f499ff',`realname` = '陈聪智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '382455292@qq.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:52',`fails` = '2',`referer` = '',`join` = '2014-11-29 16:52:52',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE id  = '2'

20141129 17:34:29: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:34:35: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '2',`account` = '18250813004',`password` = '0a5656f130702beb94142984b1f499ff',`realname` = '陈聪智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '382455292@qq.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:52',`fails` = '3',`referer` = '',`join` = '2014-11-29 16:52:52',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE id  = '2'

20141129 17:35:10: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:35:51: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:36:04: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:36:09: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '2',`account` = '18250813004',`password` = '0a5656f130702beb94142984b1f499ff',`realname` = '陈聪智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '382455292@qq.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:52',`fails` = '4',`referer` = '',`join` = '2014-11-29 16:52:52',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE id  = '2'

20141129 17:36:28: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '2',`account` = '18250813004',`password` = '0a5656f130702beb94142984b1f499ff',`realname` = '陈聪智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '382455292@qq.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 16:52:52',`fails` = '5',`referer` = '',`join` = '2014-11-29 16:52:52',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE id  = '2'

20141129 17:36:32: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:36:49: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:37:12: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:37:30: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:37:43: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:37:56: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:38:08: /api.php?m=user&a=login&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:38:10: /admin.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:38:53: /index.php?m=user&a=control
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:38:53: /index.php?m=user&a=deny&module=user&method=control&referer=aHR0cDovL2xvY2FsLm1laXphaS5jb20vaW5kZXgucGhwP209aW5kZXgmYT1pbmRleA==
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_deny') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:38:55: /index.php?m=user&a=logout&referer=aHR0cDovL2xvY2FsLm1laXphaS5jb20vaW5kZXgucGhwP209dXNlciZhPWNvbnRyb2w=
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_logout') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:38:55: /index.php?m=user&a=login&referer=aHR0cDovL2xvY2FsLm1laXphaS5jb20vaW5kZXgucGhwP209dXNlciZhPWNvbnRyb2w=
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:38:59: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:39:04: /index.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:39:05: /index.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:39:06: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:39:09: /index.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:39:56: /api.php?m=misc&a=ping&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','misc_ping') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:40:26: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:40:29: /index.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE email  = '382455292@qq.com'

20141129 17:40:39: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:40:41: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:40:47: /index.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = 'azhi'

20141129 17:41:03: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:41:08: /index.php?m=user&a=login&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = 'azhi'
  UPDATE mz_user SET `id` = '2',`account` = 'azhi',`password` = '0a5656f130702beb94142984b1f499ff',`realname` = '陈聪智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '382455292@qq.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '3',`ip` = '127.0.0.1',`last` = '2014-11-29 17:41:08',`fails` = '0',`referer` = '',`join` = '2014-11-29 16:52:52',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE account  = 'azhi'

20141129 17:41:08: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:41:08: /index.php?m=index&a=index
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:41:08' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:41:08' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:41:08' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:41:08: /index.php?m=message&a=notify&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:41:10: /index.php?m=misc&a=qrcode
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','misc_qrcode') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:41:13: /index.php?m=user&a=logout
  SELECT * FROM mz_config WHERE owner IN ('system','azhi') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_logout') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:41:13: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:41:33: /index.php?m=user&a=register
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_register') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:42:11: /index.php?m=user&a=register
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_register') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:42:19: /index.php?m=user&a=register
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_register') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:42:26: /index.php?m=user&a=register
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_register') AND template  = 'default'
  SELECT * FROM mz_block
  INSERT INTO mz_user SET `account` = '18250813004',`realname` = '阿智',`email` = 'chencongzhi520@gmail.com',`company` = '',`phone` = '',`referer` = '',`join` = '2014-11-29 17:42:26',`last` = '2014-11-29 17:42:26',`visits` = '1',`password` = 'f2386997cf7215b3393a67a753d26ecf'
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '3',`account` = '18250813004',`password` = 'f2386997cf7215b3393a67a753d26ecf',`realname` = '阿智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = 'chencongzhi520@gmail.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '127.0.0.1',`last` = '2014-11-29 17:42:26',`fails` = '0',`referer` = '',`join` = '2014-11-29 17:42:26',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE account  = '18250813004'

20141129 17:42:27: /index.php?m=user&a=login
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_login') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:42:27: /index.php?m=index&a=index
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides' ORDER BY `key`
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_product AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:42:27' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:42:27' AND t1.status  = 'normal' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM mz_article AS t1  LEFT JOIN mz_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2014-11-29 17:42:27' AND t1.status  = 'normal' GROUP BY t2.id ORDER BY addedDate desc
  SELECT * FROM mz_wx_public ORDER BY addedDate

20141129 17:42:27: /index.php?m=message&a=notify&t=html
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'

20141129 17:43:07: /api.php?m=user&a=apilogin&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_apilogin') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:43:16: /api.php?m=user&a=apilogin&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_apilogin') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:43:49: /api.php?m=user&a=apilogin&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_apilogin') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '3',`account` = '18250813004',`password` = 'f2386997cf7215b3393a67a753d26ecf',`realname` = '阿智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = 'chencongzhi520@gmail.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '3',`ip` = '127.0.0.1',`last` = '2014-11-29 17:43:49',`fails` = '0',`referer` = '',`join` = '2014-11-29 17:42:26',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE account  = '18250813004'

20141129 17:44:56: /api.php?m=user&a=apilogin&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_apilogin') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:45:16: /api.php?m=user&a=apilogin&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_apilogin') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '3',`account` = '18250813004',`password` = 'f2386997cf7215b3393a67a753d26ecf',`realname` = '阿智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = 'chencongzhi520@gmail.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '4',`ip` = '127.0.0.1',`last` = '2014-11-29 17:45:16',`fails` = '0',`referer` = '',`join` = '2014-11-29 17:42:26',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE account  = '18250813004'

20141129 17:46:12: /api.php?m=user&a=apilogin&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_apilogin') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'
  UPDATE mz_user SET `id` = '3',`account` = '18250813004',`password` = 'f2386997cf7215b3393a67a753d26ecf',`realname` = '阿智',`nickname` = '',`admin` = 'no',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = 'chencongzhi520@gmail.com',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '5',`ip` = '127.0.0.1',`last` = '2014-11-29 17:46:12',`fails` = '0',`referer` = '',`join` = '2014-11-29 17:42:26',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`collegeID` = '',`collegeName` = '',`profession` = '',`grade` = '',`location` = '',`appVersion` = '',`userType` = '' WHERE account  = '18250813004'

20141129 17:48:52: /api.php?m=user&a=apilogin&account=18250813004&password=123456
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_apilogin') AND template  = 'default'
  SELECT * FROM mz_block

20141129 17:55:58: /api.php?m=user&a=checknickname&nickname=aaa
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_checknickname') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE nickname  = 'aaa'

20141129 17:56:03: /api.php?m=user&a=checknickname&nickname=aaaa
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_checknickname') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE nickname  = 'aaaa'

20141129 17:56:49: /api.php?m=user&a=checkphone&phone=18250813004
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_checkphone') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE phone  = '18250813004'

20141129 17:57:06: /api.php?m=user&a=checkphone&phone=18250813004
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_checkphone') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

20141129 17:57:11: /api.php?m=user&a=checkphone&phone=182508130041
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_checkphone') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '182508130041'

20141129 17:57:19: /api.php?m=user&a=checkphone&phone=18250813004
  SELECT * FROM mz_config WHERE owner IN ('system','18250813004') ORDER BY id
  SELECT alias, id as category, type as module FROM mz_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM mz_article WHERE type  = 'page'
  SELECT id, alias FROM mz_category WHERE type  = 'forum'
  SELECT id, alias FROM mz_category WHERE type  = 'blog'
  SELECT * FROM mz_layout WHERE page IN ('all','user_checkphone') AND template  = 'default'
  SELECT * FROM mz_block
  SELECT * FROM mz_user WHERE account  = '18250813004'

