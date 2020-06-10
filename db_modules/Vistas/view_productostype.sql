CREATE OR REPLACE VIEW view_productostype AS
SELECT "tbl_productClass".code AS codeclass,
   "tbl_poductsType".code,
   "tbl_poductsType".name
FROM "tbl_poductsType"
   JOIN "tbl_productClass" ON "tbl_productClass".code::text = "tbl_poductsType"."classCode"::text;
