CREATE OR REPLACE VIEW public.view_modelclass AS 
 SELECT
    tbl_model.code,
    tbl_model.name
   FROM tbl_model;