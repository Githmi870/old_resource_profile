<?php

namespace App\Helpers;

class TextNormalizer
{
    public static function normalizeSinhala($text)
    {
        // Remove all whitespace
        $text = preg_replace('/\s+/', '', $text);

        // Normalize common vowel variants
        $text = str_replace(['ෑ', 'ැ'], 'ැ', $text); // ae
        $text = str_replace(['ේ', 'ෙ'], 'ෙ', $text); // e
        $text = str_replace(['ෝ', 'ො'], 'ො', $text); // o
        $text = str_replace(['ු', 'ූ'], 'ු', $text); // u
        $text = str_replace(['ි', 'ී'], 'ි', $text); // i

        // Normalize common consonant variants
        $text = str_replace(['ඳ', 'ද', 'ධ'], 'ද', $text); // da
        $text = str_replace(['ථ', 'ත'], 'ත', $text); // tha
        $text = str_replace(['බ', 'භ'], 'බ', $text); // ba
        $text = str_replace(['ග', 'ඝ'], 'ග', $text); // ga
        $text = str_replace(['ජ', 'ඣ'], 'ජ', $text); // ja
        $text = str_replace(['ච', 'ඡ'], 'ච', $text); // cha
        $text = str_replace(['ට', 'ඨ'], 'ට', $text); // ta
        $text = str_replace(['ඩ', 'ඪ'], 'ඩ', $text);
        $text = str_replace(['ප', 'ඵ'], 'ප', $text); // pa
        $text = str_replace(['ක', 'ඛ'], 'ක', $text);
        $text = str_replace(['ස', 'ශ', 'ෂ'], 'ස', $text); // sa
        $text = str_replace(['හ', 'ඃ'], 'හ', $text); // ha
        $text = str_replace(['ළ', 'ල'], 'ල', $text); // la
        $text = str_replace(['ණ', 'න'], 'න', $text); // na

        // Remove zero-width joiners or invisible characters
        $text = preg_replace('/[\x{200D}\x{200C}]/u', '', $text);

        return $text;
    }
}
