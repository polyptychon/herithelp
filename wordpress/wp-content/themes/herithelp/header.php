<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTaOCaDZZVv73zpFSwE4Va2k.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTdWlIHla9B101mdmTHF3-q0.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTVMRqIICSqEqsEoDxn8ddME.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTaWHppw2c1XOp6B2yhU8z7c.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTeji7H8UD0RUWSM-55zrR4g.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTcw0n1X1lV_hRH3yZFpIE9Q.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTSYtBUPDK3WL7KRKS_3q7OE.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:300;src:local('Open Sans Light'),local('OpenSans-Light'),url(http://fonts.gstatic.com/s/opensans/v10/DXI1ORHCpsQm3Vp6mXoaTRampu5_7CjHW5spxoeN3Vs.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/K88pR3goAWT7BTt32Z01m5Bw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/RjgO7rYTmqiVp7vzi-Q5UZBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/ttwNtsRpgsxVmgGGmiUOEpBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/LWCjsQkB6EMdfHrEVqA1KZBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/xozscpT2726on7jbcb_pApBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/59ZRklaO5bWGqF5A9baEEZBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/u-WUoqrET9fUeobQW7jkRZBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:400;src:local('Open Sans'),local('OpenSans'),url(http://fonts.gstatic.com/s/opensans/v10/cJZKeOuBrn4kERxqtaUH3ZBw1xU1rKptJj_0jans920.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNSqOCaDZZVv73zpFSwE4Va2k.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNStWlIHla9B101mdmTHF3-q0.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNSlMRqIICSqEqsEoDxn8ddME.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNSqWHppw2c1XOp6B2yhU8z7c.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNSuji7H8UD0RUWSM-55zrR4g.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNSsw0n1X1lV_hRH3yZFpIE9Q.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNSiYtBUPDK3WL7KRKS_3q7OE.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:600;src:local('Open Sans Semibold'),local('OpenSans-Semibold'),url(http://fonts.gstatic.com/s/opensans/v10/MTP_ySUJH_bn48VBG8sNShampu5_7CjHW5spxoeN3Vs.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzKOCaDZZVv73zpFSwE4Va2k.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzNWlIHla9B101mdmTHF3-q0.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzFMRqIICSqEqsEoDxn8ddME.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzKWHppw2c1XOp6B2yhU8z7c.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzOji7H8UD0RUWSM-55zrR4g.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzMw0n1X1lV_hRH3yZFpIE9Q.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzCYtBUPDK3WL7KRKS_3q7OE.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:700;src:local('Open Sans Bold'),local('OpenSans-Bold'),url(http://fonts.gstatic.com/s/opensans/v10/k3k702ZOKiLJc3WVjuplzBampu5_7CjHW5spxoeN3Vs.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-hqOCaDZZVv73zpFSwE4Va2k.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-htWlIHla9B101mdmTHF3-q0.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-hlMRqIICSqEqsEoDxn8ddME.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-hqWHppw2c1XOp6B2yhU8z7c.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-huji7H8UD0RUWSM-55zrR4g.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-hsw0n1X1lV_hRH3yZFpIE9Q.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-hiYtBUPDK3WL7KRKS_3q7OE.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:normal;font-weight:800;src:local('Open Sans Extrabold'),local('OpenSans-Extrabold'),url(http://fonts.gstatic.com/s/opensans/v10/EInbV5DfGHOiMmvb1Xr-hhampu5_7CjHW5spxoeN3Vs.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxh-d0Ps7SYMINeh7goWOihc.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxvLBl1WW9IMtpizwVvmL2lA.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxvvn6LI2LprBJXb3dYRSpOE.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxiHDFpeaZstBgByDevYxtuM.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxmvOVdJ7vwdAUM1_0w6rHJ0.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxuIzlBUWm_bhlDgXdZvgJTg.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxrIoAo9wAeLGDYpbspX6MZU.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:300;src:local('Open Sans Light Italic'),local('OpenSansLight-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxtTIkQYohD4BpHvJ3NvbHoA.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBjh7e2W4hm9ZA_z4UdP-cQU.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBpwaoV4em0XsfI20r5f4EOM.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBshIsjW5fEZuOum29gsYqpo.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBiMV0bfL-jZ99U6bs5jsL-w.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBslLAZC6mdXApAHSjvz6_xo.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBocW2RraEATWgv1xznQqawU.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBogt8zh49GR1Df_uPwTXpxw.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:400;src:local('Open Sans Italic'),local('OpenSans-Italic'),url(http://fonts.gstatic.com/s/opensans/v10/xjAJXh38I15wypJXxuGMBogp9Q8gbYrhqGlRav_IXfk.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxuJu9MmECH0mOg1XzzGCJOE.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxvb88fn1iiNG2PkxxK9YFAg.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxs_pjakFHbdvVTv6ANKcJgo.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxsezutRp_bTh7j9axvTIfAk.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxjRZ1lZfqALcwN_WamuTm_4.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxr8-ERRCpNAGxrb0cJJpWhM.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxsnmlH4evaVTD0ek7Sy0uMg.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:600;src:local('Open Sans Semibold Italic'),local('OpenSans-SemiboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxsiAiQ_a33snTsJhwZvMEaI.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxqLgSh4rH7gpNYINv324ktE.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxhvNyNQU9jtOiCGv0BahFbY.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxqkZeiFafWJ66oesKDyPDng.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxr0bxdAF-AdQuruTpX6ZMdE.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxntq4fgPehxLaAkzmUi9IJU.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxuIgLFkjxiD69wEV_W7yxK4.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxpNqtRD8o2krntaMXKqEhp0.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:700;src:local('Open Sans Bold Italic'),local('OpenSans-BoldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxv79_ZuUxCigM2DespTnFaw.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxgzsCvW96hdCz1CWLEqKbOE.woff2) format('woff2');unicode-range:U+0460052F,U+20B4,U+2DE0-2DFF,U+A640-A69F}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxlFXBB7FvX15HnOKKyX4qYs.woff2) format('woff2');unicode-range:U+0400045F,U+04900491,U+04B004B1,U+2116}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxsl2s1z2T77KOJ2qfvYrDqc.woff2) format('woff2');unicode-range:U+02BC,U+0900097F,U+1CD0-1CF6,U+1CF8-1CF9,U+200B-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxotbKmAufYywIAQdOVFAP2g.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxkvgC47UW-5VA6k5GirBMX8.woff2) format('woff2');unicode-range:U+037003FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxtrIybAyQiARbGbwzsRb5TQ.woff2) format('woff2');unicode-range:U+01020103,U+1EA0-1EF1,U+20AB}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxokVzwjaAC8CsrqOlSj4vGY.woff2) format('woff2');unicode-range:U+0100024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Open Sans';font-style:italic;font-weight:800;src:local('Open Sans Extrabold Italic'),local('OpenSans-ExtraboldItalic'),url(http://fonts.gstatic.com/s/opensans/v10/PRmiXeptR36kaC0GEAetxmPkvcX8kXDzy1NrkNCBkJ4.woff2) format('woff2');unicode-range:U+000000FF,U+0131,U+01520153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}</style>
	<link type="text/css" rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/assets/css/main.css">
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/assets/images/favicon.png"/>
	<script>(function() { document.addEventListener("DOMContentLoaded", function() { var u = document.querySelectorAll(".navbar-nav a, h2, .uppercase"); for (var i = 0, l = u.length; i < l; i++) { u[i].innerHTML = getAccText(u[i].innerHTML); } function getAccText(t) { t = t.replace(/Ά/g, "Α");t = t.replace(/ά/g, "α");t = t.replace(/Έ/g, "Ε");t = t.replace(/έ/g, "ε");t = t.replace(/Ή/g, "Η");t = t.replace(/ή/g, "η");t = t.replace(/Ί/g, "Ι");t = t.replace(/Ϊ/g, "Ι");t = t.replace(/ί/g, "ι");t = t.replace(/ϊ/g, "ι");t = t.replace(/ΐ/g, "ι");t = t.replace(/Ό/g, "Ο");t = t.replace(/ό/g, "ο");t = t.replace(/Ύ/g, "Υ");t = t.replace(/Ϋ/g, "Υ");t = t.replace(/ύ/g, "υ");t = t.replace(/ϋ/g, "υ");t = t.replace(/ΰ/g, "υ");t = t.replace(/Ώ/g, "Ω");t = t.replace(/ώ/g, "ω"); return t; } }); }());</script>
	<?php wp_head(); ?>
</head>
<body>
<div class="header-bar">
	<div class="container top-header-sub-menu">
		<?php //languages_list_header(); ?>
		<?php wp_nav_menu( array(
			'menu'       => 'Contact Menu',
			'container'  => '',
			'items_wrap' => '<ul class="header-bar-menu pull-right">%3$s</ul> '
		) ); ?>
	</div>
</div>
<div class="header">
	<div class="container">
		<header id="top" class="navbar">
			<div class="navbar-header">
				<h1><a href="<?php echo get_option( 'home' ); ?>" title="<?php brand_title(); ?>" class="navbar-brand"><?php brand_title(); ?></a></h1>
				<button type="button" data-toggle="collapse" data-target=".bs-navbar-collapse" class="navbar-toggle"><span
						class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
						class="icon-bar"></span></button>
			</div>
			<nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse sub-navbar">
				<?php echo fix_acc(wp_nav_menu( array(
					'menu'       => 'Main Nav Menu',
					'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>',
					'echo' => false
				) )); ?>
			</nav>
		</header>
	</div>
</div>
