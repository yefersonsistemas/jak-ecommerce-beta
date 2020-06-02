CREATE OR REPLACE VIEW public.view_banners AS 
 SELECT tbl_banners."imgSrc",
    tbl_banners.code
   FROM tbl_banners