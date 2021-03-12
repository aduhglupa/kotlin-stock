-- Verify kotlin-stock:appuser on mysql

BEGIN;

SELECT sqitch.checkit(COUNT(*), 'User "kotlin_stock" does not exist')
  FROM mysql.user WHERE user = 'kotlin_stock';

ROLLBACK;
