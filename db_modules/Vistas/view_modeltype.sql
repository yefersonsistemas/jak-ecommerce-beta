CREATE OR REPLACE VIEW public.view_modeltype AS 
 SELECT "tbl_typeModel".name,
    "tbl_typeModel".code,
    tbl_model.name AS class
   FROM "tbl_typeModel"
     LEFT JOIN tbl_model ON "tbl_typeModel"."codeModel"::text = tbl_model.code::text;
