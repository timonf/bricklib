<?php

declare(strict_types=1);

namespace BrickLib;

/**
 * Representation of a BrickLink compatible color for a single LEGO brick.
 */
final class Color
{
    public const UNKNOWN = 0;
    public const AQUA = 41;
    public const BLACK = 11;
    public const BLUE = 7;
    public const BLUE_VIOLET = 97;
    public const BRIGHT_GREEN = 36;
    public const BRIGHT_LIGHT_BLUE = 105;
    public const BRIGHT_LIGHT_ORANGE = 110;
    public const BRIGHT_LIGHT_YELLOW = 103;
    public const BRIGHT_PINK = 104;
    public const BROWN = 8;
    public const DARK_AZURE = 153;
    public const DARK_BLUE = 63;
    public const DARK_BLUE_VIOLET = 109;
    public const DARK_BLUISH_GRAY = 85;
    public const DARK_BROWN = 120;
    public const DARK_FLESH = 91;
    public const DARK_GRAY = 10;
    public const DARK_GREEN = 80;
    public const DARK_ORANGE = 68;
    public const DARK_PINK = 47;
    public const DARK_PURPLE = 89;
    public const DARK_RED = 59;
    public const DARK_TAN = 69;
    public const DARK_TURQUOISE = 39;
    public const DARK_YELLOW = 161;
    public const EARTH_ORANGE = 29;
    public const FABULAND_BROWN = 106;
    public const FABULAND_ORANGE = 160;
    public const FLESH = 28;
    public const GREEN = 6;
    public const LAVENDER = 154;
    public const LIGHT_AQUA = 152;
    public const LIGHT_BLUE = 62;
    public const LIGHT_BLUISH_GRAY = 86;
    public const LIGHT_FLESH = 90;
    public const LIGHT_GRAY = 9;
    public const LIGHT_GREEN = 38;
    public const LIGHT_LIME = 35;
    public const LIGHT_ORANGE = 32;
    public const LIGHT_PINK = 56;
    public const LIGHT_PURPLE = 93;
    public const LIGHT_SALMON = 26;
    public const LIGHT_TURQUOISE = 40;
    public const LIGHT_VIOLET = 44;
    public const LIGHT_YELLOW = 33;
    public const LIME = 34;
    public const MAERSK_BLUE = 72;
    public const MAGENTA = 71;
    public const MEDIUM_AZURE = 156;
    public const MEDIUM_BLUE = 42;
    public const MEDIUM_DARK_FLESH = 150;
    public const MEDIUM_DARK_PINK = 94;
    public const MEDIUM_GREEN = 37;
    public const MEDIUM_LAVENDER = 157;
    public const MEDIUM_LIME = 76;
    public const MEDIUM_ORANGE = 31;
    public const MEDIUM_VIOLET = 73;
    public const NEON_GREEN = 166;
    public const NEON_ORANGE = 165;
    public const OLIVE_GREEN = 155;
    public const ORANGE = 4;
    public const PINK = 23;
    public const PURPLE = 24;
    public const RED = 5;
    public const REDDISH_BROWN = 88;
    public const RUST = 27;
    public const SALMON = 25;
    public const SAND_BLUE = 55;
    public const SAND_GREEN = 48;
    public const SAND_PURPLE = 54;
    public const SAND_RED = 58;
    public const SKY_BLUE = 87;
    public const TAN = 2;
    public const VERY_LIGHT_BLUISH_GRAY = 99;
    public const VERY_LIGHT_GRAY = 49;
    public const VERY_LIGHT_ORANGE = 96;
    public const VIOLET = 43;
    public const WHITE = 1;
    public const YELLOW = 3;
    public const YELLOWISH_GREEN = 158;
    public const TRANS_BLACK = 13;
    public const TRANS_BRIGHT_GREEN = 108;
    public const TRANS_CLEAR = 12;
    public const TRANS_DARK_BLUE = 14;
    public const TRANS_DARK_PINK = 50;
    public const TRANS_GREEN = 20;
    public const TRANS_LIGHT_BLUE = 15;
    public const TRANS_LIGHT_ORANGE = 164;
    public const TRANS_LIGHT_PURPLE = 114;
    public const TRANS_MEDIUM_BLUE = 74;
    public const TRANS_NEON_GREEN = 16;
    public const TRANS_NEON_ORANGE = 18;
    public const TRANS_NEON_YELLOW = 121;
    public const TRANS_ORANGE = 98;
    public const TRANS_PINK = 107;
    public const TRANS_PURPLE = 51;
    public const TRANS_RED = 17;
    public const TRANS_VERY_LT_BLUE = 113;
    public const TRANS_YELLOW = 19;
    public const CHROME_ANTIQUE_BRASS = 57;
    public const CHROME_BLACK = 122;
    public const CHROME_BLUE = 52;
    public const CHROME_GOLD = 21;
    public const CHROME_GREEN = 64;
    public const CHROME_PINK = 82;
    public const CHROME_SILVER = 22;
    public const COPPER = 84;
    public const FLAT_DARK_GOLD = 81;
    public const FLAT_SILVER = 95;
    public const METAL_BLUE = 78;
    public const PEARL_DARK_GRAY = 77;
    public const PEARL_GOLD = 115;
    public const PEARL_LIGHT_GOLD = 61;
    public const PEARL_LIGHT_GRAY = 66;
    public const PEARL_VERY_LIGHT_GRAY = 119;
    public const PEARL_WHITE = 83;
    public const METALLIC_GOLD = 65;
    public const METALLIC_GREEN = 70;
    public const METALLIC_SILVER = 67;
    public const GLOW_IN_DARK_OPAQUE = 46;
    public const GLOW_IN_DARK_TRANS = 118;
    public const GLOW_IN_DARK_WHITE = 159;
    public const MILKY_WHITE = 60;
    public const GLITTER_TRANS_CLEAR = 101;
    public const GLITTER_TRANS_DARK_PINK = 100;
    public const GLITTER_TRANS_LIGHT_BLUE = 162;
    public const GLITTER_TRANS_NEON_GREEN = 163;
    public const GLITTER_TRANS_PURPLE = 102;
    public const SPECKLE_BLACK_COPPER = 116;
    public const SPECKLE_BLACK_GOLD = 151;
    public const SPECKLE_BLACK_SILVER = 111;
    public const SPECKLE_DBGRAY_SILVER = 117;
    public const MX_AQUA_GREEN = 142;
    public const MX_BLACK = 128;
    public const MX_BROWN = 132;
    public const MX_BUFF = 133;
    public const MX_CHARCOAL_GRAY = 126;
    public const MX_CLEAR = 149;
    public const MX_LEMON = 139;
    public const MX_LIGHT_BLUISH_GRAY = 124;
    public const MX_LIGHT_GRAY = 125;
    public const MX_LIGHT_ORANGE = 136;
    public const MX_LIGHT_YELLOW = 137;
    public const MX_MEDIUM_BLUE = 144;
    public const MX_OCHRE_YELLOW = 138;
    public const MX_OLIVE_GREEN = 140;
    public const MX_ORANGE = 135;
    public const MX_PASTEL_BLUE = 145;
    public const MX_PASTEL_GREEN = 141;
    public const MX_PINK = 148;
    public const MX_PINK_RED = 130;
    public const MX_RED = 129;
    public const MX_TEAL_BLUE = 146;
    public const MX_TERRACOTTA = 134;
    public const MX_TILE_BLUE = 143;
    public const MX_TILE_BROWN = 131;
    public const MX_TILE_GRAY = 127;
    public const MX_VIOLET = 147;
    public const MX_WHITE = 123;
    public const BA_BLACK = 172;
    public const BA_BLACK_RUBBER = 207;
    public const BA_BLUE = 183;
    public const BA_BLUE_CHROME = 199;
    public const BA_BRASS = 197;
    public const BA_BRONZE = 198;
    public const BA_BROWN = 177;
    public const BA_CHROME = 209;
    public const BA_COBALT = 168;
    public const BA_DARK_BLUE = 190;
    public const BA_DARK_BROWN = 178;
    public const BA_DARK_GRAY = 175;
    public const BA_DARK_GRAY_RUBBER = 204;
    public const BA_DARK_TAN = 179;
    public const BA_GLOW_IN_DARK = 208;
    public const BA_GRAY_RUBBER = 203;
    public const BA_GREEN = 182;
    public const BA_GUNMETAL = 170;
    public const BA_GUNMETAL_RUBBER = 205;
    public const BA_LIGHT_GRAY = 174;
    public const BA_OD_GREEN = 189;
    public const BA_OD_METALLIC = 200;
    public const BA_OLIVE = 181;
    public const BA_PINK = 192;
    public const BA_PURPLE = 191;
    public const BA_RED = 176;
    public const BA_RED_CHROME = 201;
    public const BA_SAND_BLUE = 184;
    public const BA_SILVER = 195;
    public const BA_SILVER_RUBBER = 206;
    public const BA_TAN = 180;
    public const BA_TITANIUM = 196;
    public const BA_TRANS_BLACK = 186;
    public const BA_TRANS_BLUE = 188;
    public const BA_TRANS_CLEAR = 185;
    public const BA_TRANS_GREEN = 171;
    public const BA_TRANS_ORANGE = 187;
    public const BA_TRANS_RED = 169;
    public const BA_TRANS_RED_SPARKLE = 194;
    public const BA_TRANS_SMOKE = 193;
    public const BA_UN_BLUE = 167;
    public const BA_WHITE = 173;
    public const BA_WHITE_RUBBER = 202;

    private const INFO_NAME = 0;
    private const INFO_RGB_COLOR = 1;
    private const INFO_COLOR_TYPE = 2;
    private const INFO_LDD_COLOR = 3;
    private const INFO_LDD_ALT_COLOR = 4;

    private const COLOR_INFORMATION = [
        self::AQUA => [self::INFO_NAME => 'Aqua', self::INFO_RGB_COLOR => 'b5d3d6', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 118],
        self::BLACK => [self::INFO_NAME => 'Black', self::INFO_RGB_COLOR => '212121', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 26],
        self::BLUE => [self::INFO_NAME => 'Blue', self::INFO_RGB_COLOR => '0057a6', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 23],
        self::BLUE_VIOLET => [self::INFO_NAME => 'Blue-Violet', self::INFO_RGB_COLOR => '506cef', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 112],
        self::BRIGHT_GREEN => [self::INFO_NAME => 'Bright Green', self::INFO_RGB_COLOR => '10cb31', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 37],
        self::BRIGHT_LIGHT_BLUE => [self::INFO_NAME => 'Bright Light Blue', self::INFO_RGB_COLOR => '9FC3E9', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 212],
        self::BRIGHT_LIGHT_ORANGE => [self::INFO_NAME => 'Bright Light Orange', self::INFO_RGB_COLOR => 'F7BA30', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 191],
        self::BRIGHT_LIGHT_YELLOW => [self::INFO_NAME => 'Bright Light Yellow', self::INFO_RGB_COLOR => 'F3E055', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 226],
        self::BRIGHT_PINK => [self::INFO_NAME => 'Bright Pink', self::INFO_RGB_COLOR => 'FFBBFF', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 222],
        self::BROWN => [self::INFO_NAME => 'Brown', self::INFO_RGB_COLOR => '532115', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 25],
        self::DARK_AZURE => [self::INFO_NAME => 'Dark Azure', self::INFO_RGB_COLOR => '3399FF', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 321],
        self::DARK_BLUE => [self::INFO_NAME => 'Dark Blue', self::INFO_RGB_COLOR => '143044', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 140],
        self::DARK_BLUE_VIOLET => [self::INFO_NAME => 'Dark Blue-Violet', self::INFO_RGB_COLOR => '2032B0', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 196],
        self::DARK_BLUISH_GRAY => [self::INFO_NAME => 'Dark Bluish Gray', self::INFO_RGB_COLOR => '595D60', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 199],
        self::DARK_BROWN => [self::INFO_NAME => 'Dark Brown', self::INFO_RGB_COLOR => '330000', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 308],
        self::DARK_FLESH => [self::INFO_NAME => 'Dark Flesh', self::INFO_RGB_COLOR => '774125', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 217],
        self::DARK_GRAY => [self::INFO_NAME => 'Dark Gray', self::INFO_RGB_COLOR => '6b5a5a', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 27],
        self::DARK_GREEN => [self::INFO_NAME => 'Dark Green', self::INFO_RGB_COLOR => '2E5543', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 141],
        self::DARK_ORANGE => [self::INFO_NAME => 'Dark Orange', self::INFO_RGB_COLOR => 'b35408', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 38],
        self::DARK_PINK => [self::INFO_NAME => 'Dark Pink', self::INFO_RGB_COLOR => 'C87080', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 221],
        self::DARK_PURPLE => [self::INFO_NAME => 'Dark Purple', self::INFO_RGB_COLOR => '5f2683', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 268],
        self::DARK_RED => [self::INFO_NAME => 'Dark Red', self::INFO_RGB_COLOR => '6a0e15', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 154],
        self::DARK_TAN => [self::INFO_NAME => 'Dark Tan', self::INFO_RGB_COLOR => '907450', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 138],
        self::DARK_TURQUOISE => [self::INFO_NAME => 'Dark Turquoise', self::INFO_RGB_COLOR => '008a80', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 107],
        self::DARK_YELLOW => [self::INFO_NAME => 'Dark Yellow', self::INFO_RGB_COLOR => 'DD982E', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::EARTH_ORANGE => [self::INFO_NAME => 'Earth Orange', self::INFO_RGB_COLOR => 'E6881D', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 12],
        self::FABULAND_BROWN => [self::INFO_NAME => 'Fabuland Brown', self::INFO_RGB_COLOR => 'B3694E', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::FABULAND_ORANGE => [self::INFO_NAME => 'Fabuland Orange', self::INFO_RGB_COLOR => 'EF9121', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::FLESH => [self::INFO_NAME => 'Flesh', self::INFO_RGB_COLOR => 'CC8062', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 18],
        self::GREEN => [self::INFO_NAME => 'Green', self::INFO_RGB_COLOR => '00642e', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 28],
        self::LAVENDER => [self::INFO_NAME => 'Lavender', self::INFO_RGB_COLOR => 'B18CBF', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::LIGHT_AQUA => [self::INFO_NAME => 'Light Aqua', self::INFO_RGB_COLOR => 'CCFFFF', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 323],
        self::LIGHT_BLUE => [self::INFO_NAME => 'Light Blue', self::INFO_RGB_COLOR => 'B4D2E3', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 45],
        self::LIGHT_BLUISH_GRAY => [self::INFO_NAME => 'Light Bluish Gray', self::INFO_RGB_COLOR => 'afb5c7', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 194],
        self::LIGHT_FLESH => [self::INFO_NAME => 'Light Flesh', self::INFO_RGB_COLOR => 'feccb0', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 283],
        self::LIGHT_GRAY => [self::INFO_NAME => 'Light Gray', self::INFO_RGB_COLOR => '9c9c9c', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 2],
        self::LIGHT_GREEN => [self::INFO_NAME => 'Light Green', self::INFO_RGB_COLOR => 'a5dbb5', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 6],
        self::LIGHT_LIME => [self::INFO_NAME => 'Light Lime', self::INFO_RGB_COLOR => 'EbEE8F', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 120],
        self::LIGHT_ORANGE => [self::INFO_NAME => 'Light Orange', self::INFO_RGB_COLOR => 'f7ad63', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 125],
        self::LIGHT_PINK => [self::INFO_NAME => 'Light Pink', self::INFO_RGB_COLOR => 'FFE1FF', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 223],
        self::LIGHT_PURPLE => [self::INFO_NAME => 'Light Purple', self::INFO_RGB_COLOR => 'DA70D6', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 198],
        self::LIGHT_SALMON => [self::INFO_NAME => 'Light Salmon', self::INFO_RGB_COLOR => 'FFDEDC', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 100],
        self::LIGHT_TURQUOISE => [self::INFO_NAME => 'Light Turquoise', self::INFO_RGB_COLOR => '31B5CA', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 116],
        self::LIGHT_VIOLET => [self::INFO_NAME => 'Light Violet', self::INFO_RGB_COLOR => 'C9CAE2', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 39],
        self::LIGHT_YELLOW => [self::INFO_NAME => 'Light Yellow', self::INFO_RGB_COLOR => 'ffe383', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 3],
        self::LIME => [self::INFO_NAME => 'Lime', self::INFO_RGB_COLOR => 'A6CA55', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 119],
        self::MAERSK_BLUE => [self::INFO_NAME => 'Maersk Blue', self::INFO_RGB_COLOR => '6BADD6', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 11],
        self::MAGENTA => [self::INFO_NAME => 'Magenta', self::INFO_RGB_COLOR => 'B52952', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 124],
        self::MEDIUM_AZURE => [self::INFO_NAME => 'Medium Azure', self::INFO_RGB_COLOR => '42C0FB', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 322],
        self::MEDIUM_BLUE => [self::INFO_NAME => 'Medium Blue', self::INFO_RGB_COLOR => '61afff', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 102],
        self::MEDIUM_DARK_FLESH => [self::INFO_NAME => 'Medium Dark Flesh', self::INFO_RGB_COLOR => 'E78B3E', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 312],
        self::MEDIUM_DARK_PINK => [self::INFO_NAME => 'Medium Dark Pink', self::INFO_RGB_COLOR => 'F785B1', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 22],
        self::MEDIUM_GREEN => [self::INFO_NAME => 'Medium Green', self::INFO_RGB_COLOR => '62F58E', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 29],
        self::MEDIUM_LAVENDER => [self::INFO_NAME => 'Medium Lavender', self::INFO_RGB_COLOR => '885E9E', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::MEDIUM_LIME => [self::INFO_NAME => 'Medium Lime', self::INFO_RGB_COLOR => 'BDC618', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 115],
        self::MEDIUM_ORANGE => [self::INFO_NAME => 'Medium Orange', self::INFO_RGB_COLOR => 'FFA531', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 105],
        self::MEDIUM_VIOLET => [self::INFO_NAME => 'Medium Violet', self::INFO_RGB_COLOR => '9391e4', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::NEON_GREEN => [self::INFO_NAME => 'Neon Green', self::INFO_RGB_COLOR => 'BCEF66', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::NEON_ORANGE => [self::INFO_NAME => 'Neon Orange', self::INFO_RGB_COLOR => 'FA5947', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::OLIVE_GREEN => [self::INFO_NAME => 'Olive Green', self::INFO_RGB_COLOR => '7C9051', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::ORANGE => [self::INFO_NAME => 'Orange', self::INFO_RGB_COLOR => 'FF7E14', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 106],
        self::PINK => [self::INFO_NAME => 'Pink', self::INFO_RGB_COLOR => 'FFC0CB', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 16],
        self::PURPLE => [self::INFO_NAME => 'Purple', self::INFO_RGB_COLOR => 'a5499c', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 104],
        self::RED => [self::INFO_NAME => 'Red', self::INFO_RGB_COLOR => 'b30006', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 21],
        self::REDDISH_BROWN => [self::INFO_NAME => 'Reddish Brown', self::INFO_RGB_COLOR => '89351d', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 192],
        self::RUST => [self::INFO_NAME => 'Rust', self::INFO_RGB_COLOR => 'b52c20', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 216],
        self::SALMON => [self::INFO_NAME => 'Salmon', self::INFO_RGB_COLOR => 'f45c40', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 4],
        self::SAND_BLUE => [self::INFO_NAME => 'Sand Blue', self::INFO_RGB_COLOR => '5a7184', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 135],
        self::SAND_GREEN => [self::INFO_NAME => 'Sand Green', self::INFO_RGB_COLOR => '76a290', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 151],
        self::SAND_PURPLE => [self::INFO_NAME => 'Sand Purple', self::INFO_RGB_COLOR => 'B57DA5', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 136],
        self::SAND_RED => [self::INFO_NAME => 'Sand Red', self::INFO_RGB_COLOR => '8c6b6b', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 153],
        self::SKY_BLUE => [self::INFO_NAME => 'Sky Blue', self::INFO_RGB_COLOR => '7DBFDD', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 232],
        self::TAN => [self::INFO_NAME => 'Tan', self::INFO_RGB_COLOR => 'dec69c', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 5],
        self::VERY_LIGHT_BLUISH_GRAY => [self::INFO_NAME => 'Very Light Bluish Gray', self::INFO_RGB_COLOR => 'e4e8e8', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 208],
        self::VERY_LIGHT_GRAY => [self::INFO_NAME => 'Very Light Gray', self::INFO_RGB_COLOR => 'E8E8E8', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 103],
        self::VERY_LIGHT_ORANGE => [self::INFO_NAME => 'Very Light Orange', self::INFO_RGB_COLOR => 'E6C05D', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 36],
        self::VIOLET => [self::INFO_NAME => 'Violet', self::INFO_RGB_COLOR => '3448a4', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 110],
        self::WHITE => [self::INFO_NAME => 'White', self::INFO_RGB_COLOR => 'FFFFFF', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 1],
        self::YELLOW => [self::INFO_NAME => 'Yellow', self::INFO_RGB_COLOR => 'f7d117', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => 24],
        self::YELLOWISH_GREEN => [self::INFO_NAME => 'Yellowish Green', self::INFO_RGB_COLOR => 'DFEEA5', self::INFO_COLOR_TYPE => 'Solid', self::INFO_LDD_COLOR => null],
        self::TRANS_BLACK => [self::INFO_NAME => 'Trans-Black', self::INFO_RGB_COLOR => '939484', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 111],
        self::TRANS_BRIGHT_GREEN => [self::INFO_NAME => 'Trans-Bright Green', self::INFO_RGB_COLOR => '10Cb31', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 311],
        self::TRANS_CLEAR => [self::INFO_NAME => 'Trans-Clear', self::INFO_RGB_COLOR => 'EEEEEE', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 40],
        self::TRANS_DARK_BLUE => [self::INFO_NAME => 'Trans-Dark Blue', self::INFO_RGB_COLOR => '00296B', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 43],
        self::TRANS_DARK_PINK => [self::INFO_NAME => 'Trans-Dark Pink', self::INFO_RGB_COLOR => 'CE1d9b', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 113],
        self::TRANS_GREEN => [self::INFO_NAME => 'Trans-Green', self::INFO_RGB_COLOR => '217625', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 48],
        self::TRANS_LIGHT_BLUE => [self::INFO_NAME => 'Trans-Light Blue', self::INFO_RGB_COLOR => '68BCC5', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 42],
        self::TRANS_LIGHT_ORANGE => [self::INFO_NAME => 'Trans-Light Orange', self::INFO_RGB_COLOR => 'E99A3A', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => null],
        self::TRANS_LIGHT_PURPLE => [self::INFO_NAME => 'Trans-Light Purple', self::INFO_RGB_COLOR => 'B97AB1', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => null],
        self::TRANS_MEDIUM_BLUE => [self::INFO_NAME => 'Trans-Medium Blue', self::INFO_RGB_COLOR => '7384A5', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 143],
        self::TRANS_NEON_GREEN => [self::INFO_NAME => 'Trans-Neon Green', self::INFO_RGB_COLOR => 'C0F500', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 49],
        self::TRANS_NEON_ORANGE => [self::INFO_NAME => 'Trans-Neon Orange', self::INFO_RGB_COLOR => 'FF4231', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 47],
        self::TRANS_NEON_YELLOW => [self::INFO_NAME => 'Trans-Neon Yellow', self::INFO_RGB_COLOR => 'FFD700', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 157],
        self::TRANS_ORANGE => [self::INFO_NAME => 'Trans-Orange', self::INFO_RGB_COLOR => 'D04010', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 182],
        self::TRANS_PINK => [self::INFO_NAME => 'Trans-Pink', self::INFO_RGB_COLOR => 'FF8298', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => null],
        self::TRANS_PURPLE => [self::INFO_NAME => 'Trans-Purple', self::INFO_RGB_COLOR => '8320B7', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 126],
        self::TRANS_RED => [self::INFO_NAME => 'Trans-Red', self::INFO_RGB_COLOR => '9C0010', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 41],
        self::TRANS_VERY_LT_BLUE => [self::INFO_NAME => 'Trans-Very Lt Blue', self::INFO_RGB_COLOR => 'B7C8BF', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => null],
        self::TRANS_YELLOW => [self::INFO_NAME => 'Trans-Yellow', self::INFO_RGB_COLOR => 'EBF72D', self::INFO_COLOR_TYPE => 'Transparent', self::INFO_LDD_COLOR => 44],
        self::CHROME_ANTIQUE_BRASS => [self::INFO_NAME => 'Chrome Antique Brass', self::INFO_RGB_COLOR => '645a4c', self::INFO_COLOR_TYPE => 'Chrome', self::INFO_LDD_COLOR => null],
        self::CHROME_BLACK => [self::INFO_NAME => 'Chrome Black', self::INFO_RGB_COLOR => '544E4F', self::INFO_COLOR_TYPE => 'Chrome', self::INFO_LDD_COLOR => null],
        self::CHROME_BLUE => [self::INFO_NAME => 'Chrome Blue', self::INFO_RGB_COLOR => '5C66A4', self::INFO_COLOR_TYPE => 'Chrome', self::INFO_LDD_COLOR => null],
        self::CHROME_GOLD => [self::INFO_NAME => 'Chrome Gold', self::INFO_RGB_COLOR => 'f1f2e1', self::INFO_COLOR_TYPE => 'Chrome', self::INFO_LDD_COLOR => null],
        self::CHROME_GREEN => [self::INFO_NAME => 'Chrome Green', self::INFO_RGB_COLOR => '3CB371', self::INFO_COLOR_TYPE => 'Chrome', self::INFO_LDD_COLOR => null],
        self::CHROME_PINK => [self::INFO_NAME => 'Chrome Pink', self::INFO_RGB_COLOR => 'aa4d8e', self::INFO_COLOR_TYPE => 'Chrome', self::INFO_LDD_COLOR => null],
        self::CHROME_SILVER => [self::INFO_NAME => 'Chrome Silver', self::INFO_RGB_COLOR => 'DCDCDC', self::INFO_COLOR_TYPE => 'Chrome', self::INFO_LDD_COLOR => 301],
        self::COPPER => [self::INFO_NAME => 'Copper', self::INFO_RGB_COLOR => 'C66921', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 139],
        self::FLAT_DARK_GOLD => [self::INFO_NAME => 'Flat Dark Gold', self::INFO_RGB_COLOR => 'AD7118', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 187],
        self::FLAT_SILVER => [self::INFO_NAME => 'Flat Silver', self::INFO_RGB_COLOR => '8D949C', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 179, self::INFO_LDD_ALT_COLOR => 315],
        self::METAL_BLUE => [self::INFO_NAME => 'Metal Blue', self::INFO_RGB_COLOR => '5686AE', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 145],
        self::PEARL_DARK_GRAY => [self::INFO_NAME => 'Pearl Dark Gray', self::INFO_RGB_COLOR => '666660', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 148],
        self::PEARL_GOLD => [self::INFO_NAME => 'Pearl Gold', self::INFO_RGB_COLOR => 'e79500', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 297],
        self::PEARL_LIGHT_GOLD => [self::INFO_NAME => 'Pearl Light Gold', self::INFO_RGB_COLOR => 'E7AE5A', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 127],
        self::PEARL_LIGHT_GRAY => [self::INFO_NAME => 'Pearl Light Gray', self::INFO_RGB_COLOR => 'ACB7C0', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => 131],
        self::PEARL_VERY_LIGHT_GRAY => [self::INFO_NAME => 'Pearl Very Light Gray', self::INFO_RGB_COLOR => 'D4D2CD', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => null],
        self::PEARL_WHITE => [self::INFO_NAME => 'Pearl White', self::INFO_RGB_COLOR => 'FFFFFF', self::INFO_COLOR_TYPE => 'Pearl', self::INFO_LDD_COLOR => null],
        self::METALLIC_GOLD => [self::INFO_NAME => 'Metallic Gold', self::INFO_RGB_COLOR => 'B8860B', self::INFO_COLOR_TYPE => 'Metallic', self::INFO_LDD_COLOR => null],
        self::METALLIC_GREEN => [self::INFO_NAME => 'Metallic Green', self::INFO_RGB_COLOR => 'bdb573', self::INFO_COLOR_TYPE => 'Metallic', self::INFO_LDD_COLOR => 200],
        self::METALLIC_SILVER => [self::INFO_NAME => 'Metallic Silver', self::INFO_RGB_COLOR => 'C0C0C0', self::INFO_COLOR_TYPE => 'Metallic', self::INFO_LDD_COLOR => null],
        self::GLOW_IN_DARK_OPAQUE => [self::INFO_NAME => 'Glow In Dark Opaque', self::INFO_RGB_COLOR => 'd4d5c9', self::INFO_COLOR_TYPE => 'Milky', self::INFO_LDD_COLOR => 50],
        self::GLOW_IN_DARK_TRANS => [self::INFO_NAME => 'Glow In Dark Trans', self::INFO_RGB_COLOR => 'bdc6ad', self::INFO_COLOR_TYPE => 'Milky', self::INFO_LDD_COLOR => 294],
        self::GLOW_IN_DARK_WHITE => [self::INFO_NAME => 'Glow In Dark White', self::INFO_RGB_COLOR => 'd9d9d9', self::INFO_COLOR_TYPE => 'Milky', self::INFO_LDD_COLOR => null],
        self::MILKY_WHITE => [self::INFO_NAME => 'Milky White', self::INFO_RGB_COLOR => 'd4d3dd', self::INFO_COLOR_TYPE => 'Milky', self::INFO_LDD_COLOR => 20],
        self::GLITTER_TRANS_CLEAR => [self::INFO_NAME => 'Glitter Trans-Clear', self::INFO_RGB_COLOR => 'b2adaa', self::INFO_COLOR_TYPE => 'Glitter', self::INFO_LDD_COLOR => 117],
        self::GLITTER_TRANS_DARK_PINK => [self::INFO_NAME => 'Glitter Trans-Dark Pink', self::INFO_RGB_COLOR => 'ab43c3', self::INFO_COLOR_TYPE => 'Glitter', self::INFO_LDD_COLOR => 114],
        self::GLITTER_TRANS_LIGHT_BLUE => [self::INFO_NAME => 'Glitter Trans-Light Blue', self::INFO_RGB_COLOR => '68BCC5', self::INFO_COLOR_TYPE => 'Glitter', self::INFO_LDD_COLOR => null],
        self::GLITTER_TRANS_NEON_GREEN => [self::INFO_NAME => 'Glitter Trans-Neon Green', self::INFO_RGB_COLOR => 'C0F500', self::INFO_COLOR_TYPE => 'Glitter', self::INFO_LDD_COLOR => null],
        self::GLITTER_TRANS_PURPLE => [self::INFO_NAME => 'Glitter Trans-Purple', self::INFO_RGB_COLOR => '3A2B82', self::INFO_COLOR_TYPE => 'Glitter', self::INFO_LDD_COLOR => 129],
        self::SPECKLE_BLACK_COPPER => [self::INFO_NAME => 'Speckle Black-Copper', self::INFO_RGB_COLOR => '5F4E47', self::INFO_COLOR_TYPE => 'Speckle', self::INFO_LDD_COLOR => null],
        self::SPECKLE_BLACK_GOLD => [self::INFO_NAME => 'Speckle Black-Gold', self::INFO_RGB_COLOR => 'AB9421', self::INFO_COLOR_TYPE => 'Speckle', self::INFO_LDD_COLOR => null],
        self::SPECKLE_BLACK_SILVER => [self::INFO_NAME => 'Speckle Black-Silver', self::INFO_RGB_COLOR => '7C7E7C', self::INFO_COLOR_TYPE => 'Speckle', self::INFO_LDD_COLOR => 132],
        self::SPECKLE_DBGRAY_SILVER => [self::INFO_NAME => 'Speckle DBGray-Silver', self::INFO_RGB_COLOR => '4A6363', self::INFO_COLOR_TYPE => 'Speckle', self::INFO_LDD_COLOR => null],
        self::MX_AQUA_GREEN => [self::INFO_NAME => 'Mx Aqua Green', self::INFO_RGB_COLOR => '27867E', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_BLACK => [self::INFO_NAME => 'Mx Black', self::INFO_RGB_COLOR => '000000', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_BROWN => [self::INFO_NAME => 'Mx Brown', self::INFO_RGB_COLOR => '907450', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_BUFF => [self::INFO_NAME => 'Mx Buff', self::INFO_RGB_COLOR => 'DEC69C', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_CHARCOAL_GRAY => [self::INFO_NAME => 'Mx Charcoal Gray', self::INFO_RGB_COLOR => '595D60', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_CLEAR => [self::INFO_NAME => 'Mx Clear', self::INFO_RGB_COLOR => 'FFFFFF', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_LEMON => [self::INFO_NAME => 'Mx Lemon', self::INFO_RGB_COLOR => 'BDC618', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_LIGHT_BLUISH_GRAY => [self::INFO_NAME => 'Mx Light Bluish Gray', self::INFO_RGB_COLOR => 'AfB5C7', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_LIGHT_GRAY => [self::INFO_NAME => 'Mx Light Gray', self::INFO_RGB_COLOR => '9C9C9C', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_LIGHT_ORANGE => [self::INFO_NAME => 'Mx Light Orange', self::INFO_RGB_COLOR => 'F7AD63', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_LIGHT_YELLOW => [self::INFO_NAME => 'Mx Light Yellow', self::INFO_RGB_COLOR => 'FFE371', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_MEDIUM_BLUE => [self::INFO_NAME => 'Mx Medium Blue', self::INFO_RGB_COLOR => '61AFFF', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_OCHRE_YELLOW => [self::INFO_NAME => 'Mx Ochre Yellow', self::INFO_RGB_COLOR => 'FED557', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_OLIVE_GREEN => [self::INFO_NAME => 'Mx Olive Green', self::INFO_RGB_COLOR => '7C9051', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_ORANGE => [self::INFO_NAME => 'Mx Orange', self::INFO_RGB_COLOR => 'F47B30', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_PASTEL_BLUE => [self::INFO_NAME => 'Mx Pastel Blue', self::INFO_RGB_COLOR => '68AECE', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_PASTEL_GREEN => [self::INFO_NAME => 'Mx Pastel Green', self::INFO_RGB_COLOR => '7DB538', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_PINK => [self::INFO_NAME => 'Mx Pink', self::INFO_RGB_COLOR => 'F785B1', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_PINK_RED => [self::INFO_NAME => 'Mx Pink Red', self::INFO_RGB_COLOR => 'F45C40', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_RED => [self::INFO_NAME => 'Mx Red', self::INFO_RGB_COLOR => 'B52C20', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_TEAL_BLUE => [self::INFO_NAME => 'Mx Teal Blue', self::INFO_RGB_COLOR => '467083', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_TERRACOTTA => [self::INFO_NAME => 'Mx Terracotta', self::INFO_RGB_COLOR => '5C5030', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_TILE_BLUE => [self::INFO_NAME => 'Mx Tile Blue', self::INFO_RGB_COLOR => '0057A6', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_TILE_BROWN => [self::INFO_NAME => 'Mx Tile Brown', self::INFO_RGB_COLOR => '330000', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_TILE_GRAY => [self::INFO_NAME => 'Mx Tile Gray', self::INFO_RGB_COLOR => '6B5A5A', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_VIOLET => [self::INFO_NAME => 'Mx Violet', self::INFO_RGB_COLOR => 'BD7D85', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::MX_WHITE => [self::INFO_NAME => 'Mx White', self::INFO_RGB_COLOR => 'FFFFFF', self::INFO_COLOR_TYPE => 'Modulex', self::INFO_LDD_COLOR => null],
        self::BA_BLACK => [self::INFO_NAME => 'BA Black', self::INFO_RGB_COLOR => '212121', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_BLACK_RUBBER => [self::INFO_NAME => 'BA Black Rubber', self::INFO_RGB_COLOR => '282421', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_BLUE => [self::INFO_NAME => 'BA Blue', self::INFO_RGB_COLOR => '0057A6', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_BLUE_CHROME => [self::INFO_NAME => 'BA Blue Chrome', self::INFO_RGB_COLOR => '103793', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_BRASS => [self::INFO_NAME => 'BA Brass', self::INFO_RGB_COLOR => 'B59914', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_BRONZE => [self::INFO_NAME => 'BA Bronze', self::INFO_RGB_COLOR => '8A683B', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_BROWN => [self::INFO_NAME => 'BA Brown', self::INFO_RGB_COLOR => '89351D', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_CHROME => [self::INFO_NAME => 'BA Chrome', self::INFO_RGB_COLOR => 'DCDCDC', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_COBALT => [self::INFO_NAME => 'BA Cobalt', self::INFO_RGB_COLOR => '5C66A4', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_DARK_BLUE => [self::INFO_NAME => 'BA Dark Blue', self::INFO_RGB_COLOR => '182142', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_DARK_BROWN => [self::INFO_NAME => 'BA Dark Brown', self::INFO_RGB_COLOR => '330000', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_DARK_GRAY => [self::INFO_NAME => 'BA Dark Gray', self::INFO_RGB_COLOR => '595D60', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_DARK_GRAY_RUBBER => [self::INFO_NAME => 'BA Dark Gray Rubber', self::INFO_RGB_COLOR => '3C3D38', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_DARK_TAN => [self::INFO_NAME => 'BA Dark Tan', self::INFO_RGB_COLOR => '907450', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_GLOW_IN_DARK => [self::INFO_NAME => 'BA Glow In Dark', self::INFO_RGB_COLOR => 'e0e2f4', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_GRAY_RUBBER => [self::INFO_NAME => 'BA Gray Rubber', self::INFO_RGB_COLOR => '393B3A', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_GREEN => [self::INFO_NAME => 'BA Green', self::INFO_RGB_COLOR => '00642E', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_GUNMETAL => [self::INFO_NAME => 'BA Gunmetal', self::INFO_RGB_COLOR => '8D949C', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_GUNMETAL_RUBBER => [self::INFO_NAME => 'BA Gunmetal Rubber', self::INFO_RGB_COLOR => '535550', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_LIGHT_GRAY => [self::INFO_NAME => 'BA Light Gray', self::INFO_RGB_COLOR => 'AFB5C7', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_OD_GREEN => [self::INFO_NAME => 'BA OD Green', self::INFO_RGB_COLOR => '556B2F', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_OD_METALLIC => [self::INFO_NAME => 'BA OD Metallic', self::INFO_RGB_COLOR => '5E6B52', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_OLIVE => [self::INFO_NAME => 'BA Olive', self::INFO_RGB_COLOR => '7C9051', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_PINK => [self::INFO_NAME => 'BA Pink', self::INFO_RGB_COLOR => 'DE3F89', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_PURPLE => [self::INFO_NAME => 'BA Purple', self::INFO_RGB_COLOR => '291A54', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_RED => [self::INFO_NAME => 'BA Red', self::INFO_RGB_COLOR => 'B30006', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_RED_CHROME => [self::INFO_NAME => 'BA Red Chrome', self::INFO_RGB_COLOR => '9F3125', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_SAND_BLUE => [self::INFO_NAME => 'BA Sand Blue', self::INFO_RGB_COLOR => '5A7184', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_SILVER => [self::INFO_NAME => 'BA Silver', self::INFO_RGB_COLOR => 'A1A1A1', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_SILVER_RUBBER => [self::INFO_NAME => 'BA Silver Rubber', self::INFO_RGB_COLOR => '474745', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TAN => [self::INFO_NAME => 'BA Tan', self::INFO_RGB_COLOR => 'DEC69C', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TITANIUM => [self::INFO_NAME => 'BA Titanium', self::INFO_RGB_COLOR => '9DA097', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_BLACK => [self::INFO_NAME => 'BA Trans Black', self::INFO_RGB_COLOR => '939484', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_BLUE => [self::INFO_NAME => 'BA Trans Blue', self::INFO_RGB_COLOR => '68BCC5', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_CLEAR => [self::INFO_NAME => 'BA Trans Clear', self::INFO_RGB_COLOR => 'EEEEEE', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_GREEN => [self::INFO_NAME => 'BA Trans Green', self::INFO_RGB_COLOR => 'C0F500', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_ORANGE => [self::INFO_NAME => 'BA Trans Orange', self::INFO_RGB_COLOR => 'D04010', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_RED => [self::INFO_NAME => 'BA Trans Red', self::INFO_RGB_COLOR => '9C0010', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_RED_SPARKLE => [self::INFO_NAME => 'BA Trans Red Sparkle', self::INFO_RGB_COLOR => '8C0815', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_TRANS_SMOKE => [self::INFO_NAME => 'BA Trans Smoke', self::INFO_RGB_COLOR => '2F2F25', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_UN_BLUE => [self::INFO_NAME => 'BA UN Blue', self::INFO_RGB_COLOR => '68AECE', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_WHITE => [self::INFO_NAME => 'BA White', self::INFO_RGB_COLOR => 'FFFFFF', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
        self::BA_WHITE_RUBBER => [self::INFO_NAME => 'BA White Rubber', self::INFO_RGB_COLOR => 'D0D0D0', self::INFO_COLOR_TYPE => 'BrickArms', self::INFO_LDD_COLOR => null],
    ];

    /**
     * @var int
     */
    private $value;

    private function __construct()
    {
    }

    public static function create(int $brickLinkColor): self
    {
        $instance = new self();
        $instance->value = $brickLinkColor;
        return $instance;
    }

    public static function fromLddColor(int $lddColor): self
    {
        foreach (self::COLOR_INFORMATION as $brickLinkColor => $colorInformation) {
            if ($colorInformation[self::INFO_LDD_COLOR] === $lddColor) {
                $instance = new self();
                $instance->value = $brickLinkColor;
                return $instance;
            }

            if (isset($colorInformation[self::INFO_LDD_ALT_COLOR]) && $colorInformation[self::INFO_LDD_ALT_COLOR] === $lddColor) {
                $instance = new self();
                $instance->value = $brickLinkColor;
                return $instance;
            }
        }

        throw new \InvalidArgumentException(sprintf('LDD Color %d could not be converted.', $lddColor));
    }

    public static function fromLddCsvColor(string $lddColor): self
    {
        // Converting something like "1 - White" to "1"
        if (!is_numeric($lddColor)) {
            $lddColor = trim(substr($lddColor, 0, strpos($lddColor, ' ')));
        }

        return static::fromLddColor((int) $lddColor);
    }

    public function __toString(): string
    {
        return self::COLOR_INFORMATION[$this->value][self::INFO_NAME];
    }

    public function toBrickLinkColor(): int
    {
        return $this->value;
    }
}
