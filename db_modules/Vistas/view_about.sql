CREATE OR REPLACE VIEW public.view_about AS 
 SELECT
    tbl_about.title,
    tbl_about.slogan,
    tbl_about."imgFirstBanner",
    tbl_about."titleFirstPost",
    tbl_about."contentFirstPost",
    tbl_about."imgSecondBanner",
    tbl_about."titleSecondPost",
    tbl_about."contentSecondPost",
   FROM tbl_about