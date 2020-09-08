<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\IntangibleContract;
use \Spatie\SchemaOrg\Contracts\RatingContract;
use \Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * The average rating based on multiple ratings or reviews.
 *
 * @see http://schema.org/AggregateRating
 *
 */
class AggregateRating extends BaseType implements IntangibleContract, RatingContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see http://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see http://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * The author of this content or rating. Please note that author is special
     * in that HTML 5 provides a special mechanism for indicating authorship via
     * the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param Organization|Organization[]|Person|Person[] $author
     *
     * @return static
     *
     * @see http://schema.org/author
     */
    public function author($author)
    {
        return $this->setProperty('author', $author);
    }

    /**
     * The highest value allowed in this rating system. If bestRating is
     * omitted, 5 is assumed.
     *
     * @param float|float[]|int|int[]|string|string[] $bestRating
     *
     * @return static
     *
     * @see http://schema.org/bestRating
     */
    public function bestRating($bestRating)
    {
        return $this->setProperty('bestRating', $bestRating);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
     *
     * @return static
     *
     * @see http://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see http://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param PropertyValue|PropertyValue[]|string|string[] $identifier
     *
     * @return static
     *
     * @see http://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param ImageObject|ImageObject[]|string|string[] $image
     *
     * @return static
     *
     * @see http://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * The item that is being reviewed/rated.
     *
     * @param Thing|Thing[] $itemReviewed
     *
     * @return static
     *
     * @see http://schema.org/itemReviewed
     */
    public function itemReviewed($itemReviewed)
    {
        return $this->setProperty('itemReviewed', $itemReviewed);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param CreativeWork|CreativeWork[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see http://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param Action|Action[] $potentialAction
     *
     * @return static
     *
     * @see http://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The count of total number of ratings.
     *
     * @param int|int[] $ratingCount
     *
     * @return static
     *
     * @see http://schema.org/ratingCount
     */
    public function ratingCount($ratingCount)
    {
        return $this->setProperty('ratingCount', $ratingCount);
    }

    /**
     * The rating for the content.
     * 
     * Usage guidelines:
     * 
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     *
     * @param float|float[]|int|int[]|string|string[] $ratingValue
     *
     * @return static
     *
     * @see http://schema.org/ratingValue
     */
    public function ratingValue($ratingValue)
    {
        return $this->setProperty('ratingValue', $ratingValue);
    }

    /**
     * This Review or Rating is relevant to this part or facet of the
     * itemReviewed.
     *
     * @param string|string[] $reviewAspect
     *
     * @return static
     *
     * @see http://schema.org/reviewAspect
     */
    public function reviewAspect($reviewAspect)
    {
        return $this->setProperty('reviewAspect', $reviewAspect);
    }

    /**
     * The count of total number of reviews.
     *
     * @param int|int[] $reviewCount
     *
     * @return static
     *
     * @see http://schema.org/reviewCount
     */
    public function reviewCount($reviewCount)
    {
        return $this->setProperty('reviewCount', $reviewCount);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see http://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param CreativeWork|CreativeWork[]|Event|Event[] $subjectOf
     *
     * @return static
     *
     * @see http://schema.org/subjectOf
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see http://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }

    /**
     * The lowest value allowed in this rating system. If worstRating is
     * omitted, 1 is assumed.
     *
     * @param float|float[]|int|int[]|string|string[] $worstRating
     *
     * @return static
     *
     * @see http://schema.org/worstRating
     */
    public function worstRating($worstRating)
    {
        return $this->setProperty('worstRating', $worstRating);
    }

}
