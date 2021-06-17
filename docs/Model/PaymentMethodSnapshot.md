# # PaymentMethodSnapshot

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | &#x60;payment-method&#x60;. | [optional]
**id** | **string** | The unique ID of the payment method. | [optional]
**method** | **string** | The type of this payment method. | [optional]
**external_identifier** | **string** | An external identifier that can be used to match the payment method against your own records. | [optional]
**label** | **string** | A label for the payment method. This can be the last 4 digits for a card, or the email address for an alternative payment method. | [optional]
**scheme** | **string** | An additional label used to differentiate different sub-types of a payment method. Most notably this can include the type of card used in a transaction. | [optional]
**expiration_date** | **string** | The expiration date for this payment method. This is mostly used by cards where the card might have an expiration date. | [optional]
**approval_url** | **string** | The optional URL that the buyer needs to be redirected to to further authorize their payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)