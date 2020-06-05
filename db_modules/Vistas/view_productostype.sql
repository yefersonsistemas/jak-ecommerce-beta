CREATE OR REPLACE VIEW view_productostype AS
SELECT "tbl_productosClass".code AS codeclass,
   "tbl_poductsType".code,
   "tbl_poductsType".name
FROM "tbl_poductsType"
   JOIN "tbl_productosClass" ON "tbl_productosClass".code::text = "tbl_poductsType"."classCode"::text;
