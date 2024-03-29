<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK\Models\Shared;


enum Service: string
{
    case CommonMistakes = 'common-mistakes';
    case BannedWords = 'banned-words';
    case Dictionary = 'dictionary';
    case Gec = 'gec';
    case Infinitive = 'infinitive';
    case Spelling = 'spelling';
    case WritingStyle = 'writing-style';
    case CustomRules = 'custom-rules';
    case SentenceCase = 'sentence-case';
    case Acronym = 'acronym';
    case OxfordComma = 'oxford-comma';
    case MlPunctuation = 'ml-punctuation';
    case Emojis = 'emojis';
    case GenderPronouns = 'gender-pronouns';
    case Sensitivity = 'sensitivity';
    case Plagiarism = 'plagiarism';
    case Readability = 'readability';
    case SentenceComplexity = 'sentence-complexity';
    case Vocabulary = 'vocabulary';
    case ParagraphLength = 'paragraph-length';
    case PlainLanguage = 'plain-language';
    case HealthyCommn = 'healthy-commn';
    case Confidence = 'confidence';
    case DataLossPrevention = 'data-loss-prevention';
    case HateSpeech = 'hate-speech';
    case ContentSafeguards = 'content-safeguards';
    case Feedback = 'feedback';
    case Claim = 'claim';
    case Quote = 'quote';
    case GenderNouns = 'gender-nouns';
    case GenderTone = 'gender-tone';
    case Grammar = 'grammar';
    case PunctuationDark = 'punctuation-dark';
    case Formatting = 'formatting';
    case Twitter = 'twitter';
    case GecDark = 'gec-dark';
    case GecGpt3 = 'gec-gpt3';
}
