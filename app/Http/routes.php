<?php

/**
 * Hatena Editor API
 * はてなダイアリーまたははてなグループをMarkdownまたはAsciiDocで更新するためのAPIです 
 *
 * OpenAPI spec version: 0.0.1
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */

/**
 * Hatena Editor API
 * @version 0.0.1
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * post convertFromAsciiDoc
 * Summary: AsciiDocをはてな記法に変換します。
 * Notes: 
 * Output-Formats: [text/plain]
 */
$app->post('/hatena_notation/v1/from/asciidoc', 'DefaultApi@convertFromAsciiDoc');
/**
 * post convertFromMarkdown
 * Summary: Markdownをはてな記法に変換します。
 * Notes: 
 * Output-Formats: [text/plain]
 */
$app->post('/hatena_notation/v1/from/markdown', 'DefaultApi@convertFromMarkdown');

