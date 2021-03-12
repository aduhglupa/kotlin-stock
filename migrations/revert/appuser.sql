-- Revert kotlin-stock:appuser from mysql

BEGIN;

DROP USER kotlin_stock;

COMMIT;
