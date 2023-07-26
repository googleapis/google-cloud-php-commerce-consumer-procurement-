<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/commerce/consumer/procurement/v1/order.proto

namespace GPBMetadata\Google\Cloud\Commerce\Consumer\Procurement\V1;

class Order
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/commerce/consumer/procurement/v1/order.proto-google.cloud.commerce.consumer.procurement.v1google/api/resource.protogoogle/protobuf/timestamp.proto"�
Order
name (	B�A
display_name
 (	B�AP

line_items (27.google.cloud.commerce.consumer.procurement.v1.LineItemB�AZ
cancelled_line_items (27.google.cloud.commerce.consumer.procurement.v1.LineItemB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time	 (2.google.protobuf.TimestampB�A
etag (	:l�Ai
5cloudcommerceconsumerprocurement.googleapis.com/Order0billingAccounts/{billing_account}/orders/{order}"�
LineItem
line_item_id (	B�AX
line_item_info (2;.google.cloud.commerce.consumer.procurement.v1.LineItemInfoB�AZ
pending_change (2=.google.cloud.commerce.consumer.procurement.v1.LineItemChangeB�AZ
change_history (2=.google.cloud.commerce.consumer.procurement.v1.LineItemChangeB�A"�
LineItemChange
	change_id (	B�A[
change_type (2A.google.cloud.commerce.consumer.procurement.v1.LineItemChangeTypeB�A\\
old_line_item_info (2;.google.cloud.commerce.consumer.procurement.v1.LineItemInfoB�AW
new_line_item_info (2;.google.cloud.commerce.consumer.procurement.v1.LineItemInfo]
change_state (2B.google.cloud.commerce.consumer.procurement.v1.LineItemChangeStateB�A
state_reason (	B�As
change_state_reason_type
 (2L.google.cloud.commerce.consumer.procurement.v1.LineItemChangeStateReasonTypeB�A>
change_effective_time (2.google.protobuf.TimestampB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time	 (2.google.protobuf.TimestampB�A"�
LineItemInfo@
offer (	B1�A�A+
)commerceoffercatalog.googleapis.com/OfferQ

parameters	 (28.google.cloud.commerce.consumer.procurement.v1.ParameterB�AV
subscription
 (2;.google.cloud.commerce.consumer.procurement.v1.SubscriptionB�A"�
	Parameter
name (	M
value (2>.google.cloud.commerce.consumer.procurement.v1.Parameter.ValueV
Value
int64_value (H 
string_value (	H 
double_value (H B
kind"�
Subscription.

start_time (2.google.protobuf.Timestamp,
end_time (2.google.protobuf.Timestamp
auto_renewal_enabled (*�
LineItemChangeType%
!LINE_ITEM_CHANGE_TYPE_UNSPECIFIED  
LINE_ITEM_CHANGE_TYPE_CREATE 
LINE_ITEM_CHANGE_TYPE_UPDATE 
LINE_ITEM_CHANGE_TYPE_CANCEL-
)LINE_ITEM_CHANGE_TYPE_REVERT_CANCELLATION*�
LineItemChangeState&
"LINE_ITEM_CHANGE_STATE_UNSPECIFIED +
\'LINE_ITEM_CHANGE_STATE_PENDING_APPROVAL#
LINE_ITEM_CHANGE_STATE_APPROVED$
 LINE_ITEM_CHANGE_STATE_COMPLETED#
LINE_ITEM_CHANGE_STATE_REJECTED$
 LINE_ITEM_CHANGE_STATE_ABANDONED%
!LINE_ITEM_CHANGE_STATE_ACTIVATING*�
LineItemChangeStateReasonType2
.LINE_ITEM_CHANGE_STATE_REASON_TYPE_UNSPECIFIED .
*LINE_ITEM_CHANGE_STATE_REASON_TYPE_EXPIRED5
1LINE_ITEM_CHANGE_STATE_REASON_TYPE_USER_CANCELLED7
3LINE_ITEM_CHANGE_STATE_REASON_TYPE_SYSTEM_CANCELLEDB�
1com.google.cloud.commerce.consumer.procurement.v1PZScloud.google.com/go/commerce/consumer/procurement/apiv1/procurementpb;procurementpb�A�
)commerceoffercatalog.googleapis.com/Offer)services/{service}/standardOffers/{offer}9billingAccounts/{consumer_billing_account}/offers/{offer}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

