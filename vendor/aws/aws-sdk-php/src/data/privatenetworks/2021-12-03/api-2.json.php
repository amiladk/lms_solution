<?php
// This file was auto-generated from sdk-root/src/data/privatenetworks/2021-12-03/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2021-12-03', 'endpointPrefix' => 'private-networks', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Private 5G', 'serviceId' => 'PrivateNetworks', 'signatureVersion' => 'v4', 'signingName' => 'private-networks', 'uid' => 'privatenetworks-2021-12-03', ], 'operations' => [ 'AcknowledgeOrderReceipt' => [ 'name' => 'AcknowledgeOrderReceipt', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/orders/acknowledge', 'responseCode' => 200, ], 'input' => [ 'shape' => 'AcknowledgeOrderReceiptRequest', ], 'output' => [ 'shape' => 'AcknowledgeOrderReceiptResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ActivateDeviceIdentifier' => [ 'name' => 'ActivateDeviceIdentifier', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/device-identifiers/activate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ActivateDeviceIdentifierRequest', ], 'output' => [ 'shape' => 'ActivateDeviceIdentifierResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'ActivateNetworkSite' => [ 'name' => 'ActivateNetworkSite', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/network-sites/activate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ActivateNetworkSiteRequest', ], 'output' => [ 'shape' => 'ActivateNetworkSiteResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'ConfigureAccessPoint' => [ 'name' => 'ConfigureAccessPoint', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/network-resources/configure', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ConfigureAccessPointRequest', ], 'output' => [ 'shape' => 'ConfigureAccessPointResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'CreateNetwork' => [ 'name' => 'CreateNetwork', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/networks', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateNetworkRequest', ], 'output' => [ 'shape' => 'CreateNetworkResponse', ], 'errors' => [ [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'CreateNetworkSite' => [ 'name' => 'CreateNetworkSite', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/network-sites', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateNetworkSiteRequest', ], 'output' => [ 'shape' => 'CreateNetworkSiteResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DeactivateDeviceIdentifier' => [ 'name' => 'DeactivateDeviceIdentifier', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/device-identifiers/deactivate', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeactivateDeviceIdentifierRequest', ], 'output' => [ 'shape' => 'DeactivateDeviceIdentifierResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DeleteNetwork' => [ 'name' => 'DeleteNetwork', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v1/networks/{networkArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteNetworkRequest', ], 'output' => [ 'shape' => 'DeleteNetworkResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'DeleteNetworkSite' => [ 'name' => 'DeleteNetworkSite', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v1/network-sites/{networkSiteArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteNetworkSiteRequest', ], 'output' => [ 'shape' => 'DeleteNetworkSiteResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'GetDeviceIdentifier' => [ 'name' => 'GetDeviceIdentifier', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/device-identifiers/{deviceIdentifierArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetDeviceIdentifierRequest', ], 'output' => [ 'shape' => 'GetDeviceIdentifierResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetNetwork' => [ 'name' => 'GetNetwork', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/networks/{networkArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetNetworkRequest', ], 'output' => [ 'shape' => 'GetNetworkResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetNetworkResource' => [ 'name' => 'GetNetworkResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/network-resources/{networkResourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetNetworkResourceRequest', ], 'output' => [ 'shape' => 'GetNetworkResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetNetworkSite' => [ 'name' => 'GetNetworkSite', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/network-sites/{networkSiteArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetNetworkSiteRequest', ], 'output' => [ 'shape' => 'GetNetworkSiteResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'GetOrder' => [ 'name' => 'GetOrder', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/orders/{orderArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetOrderRequest', ], 'output' => [ 'shape' => 'GetOrderResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListDeviceIdentifiers' => [ 'name' => 'ListDeviceIdentifiers', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/device-identifiers/list', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListDeviceIdentifiersRequest', ], 'output' => [ 'shape' => 'ListDeviceIdentifiersResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListNetworkResources' => [ 'name' => 'ListNetworkResources', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/network-resources', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListNetworkResourcesRequest', ], 'output' => [ 'shape' => 'ListNetworkResourcesResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListNetworkSites' => [ 'name' => 'ListNetworkSites', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/network-sites/list', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListNetworkSitesRequest', ], 'output' => [ 'shape' => 'ListNetworkSitesResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListNetworks' => [ 'name' => 'ListNetworks', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/networks/list', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListNetworksRequest', ], 'output' => [ 'shape' => 'ListNetworksResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListOrders' => [ 'name' => 'ListOrders', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/orders/list', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListOrdersRequest', ], 'output' => [ 'shape' => 'ListOrdersResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'Ping' => [ 'name' => 'Ping', 'http' => [ 'method' => 'GET', 'requestUri' => '/ping', 'responseCode' => 200, ], 'output' => [ 'shape' => 'PingResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UpdateNetworkSite' => [ 'name' => 'UpdateNetworkSite', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/network-sites/site', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateNetworkSiteRequest', ], 'output' => [ 'shape' => 'UpdateNetworkSiteResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], 'UpdateNetworkSitePlan' => [ 'name' => 'UpdateNetworkSitePlan', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/network-sites/plan', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateNetworkSitePlanRequest', ], 'output' => [ 'shape' => 'UpdateNetworkSiteResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AcknowledgeOrderReceiptRequest' => [ 'type' => 'structure', 'required' => [ 'orderArn', ], 'members' => [ 'orderArn' => [ 'shape' => 'Arn', ], ], ], 'AcknowledgeOrderReceiptResponse' => [ 'type' => 'structure', 'required' => [ 'order', ], 'members' => [ 'order' => [ 'shape' => 'Order', ], ], ], 'AcknowledgmentStatus' => [ 'type' => 'string', 'enum' => [ 'ACKNOWLEDGING', 'ACKNOWLEDGED', 'UNACKNOWLEDGED', ], ], 'ActivateDeviceIdentifierRequest' => [ 'type' => 'structure', 'required' => [ 'deviceIdentifierArn', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', ], 'deviceIdentifierArn' => [ 'shape' => 'Arn', ], ], ], 'ActivateDeviceIdentifierResponse' => [ 'type' => 'structure', 'required' => [ 'deviceIdentifier', ], 'members' => [ 'deviceIdentifier' => [ 'shape' => 'DeviceIdentifier', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'ActivateNetworkSiteRequest' => [ 'type' => 'structure', 'required' => [ 'networkSiteArn', 'shippingAddress', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', ], 'networkSiteArn' => [ 'shape' => 'Arn', ], 'shippingAddress' => [ 'shape' => 'Address', ], ], ], 'ActivateNetworkSiteResponse' => [ 'type' => 'structure', 'members' => [ 'networkSite' => [ 'shape' => 'NetworkSite', ], ], ], 'Address' => [ 'type' => 'structure', 'required' => [ 'city', 'country', 'name', 'postalCode', 'stateOrProvince', 'street1', ], 'members' => [ 'city' => [ 'shape' => 'AddressContent', ], 'company' => [ 'shape' => 'AddressContent', ], 'country' => [ 'shape' => 'AddressContent', ], 'name' => [ 'shape' => 'AddressContent', ], 'phoneNumber' => [ 'shape' => 'AddressContent', ], 'postalCode' => [ 'shape' => 'AddressContent', ], 'stateOrProvince' => [ 'shape' => 'AddressContent', ], 'street1' => [ 'shape' => 'AddressContent', ], 'street2' => [ 'shape' => 'AddressContent', ], 'street3' => [ 'shape' => 'AddressContent', ], ], ], 'AddressContent' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'sensitive' => true, ], 'Arn' => [ 'type' => 'string', 'pattern' => '^arn:aws:private-networks:[a-z0-9-]+:[^:]*:.*$', ], 'ClientToken' => [ 'type' => 'string', 'max' => 100, 'min' => 1, ], 'ConfigureAccessPointRequest' => [ 'type' => 'structure', 'required' => [ 'accessPointArn', ], 'members' => [ 'accessPointArn' => [ 'shape' => 'Arn', ], 'cpiSecretKey' => [ 'shape' => 'ConfigureAccessPointRequestCpiSecretKeyString', ], 'cpiUserId' => [ 'shape' => 'ConfigureAccessPointRequestCpiUserIdString', ], 'cpiUserPassword' => [ 'shape' => 'ConfigureAccessPointRequestCpiUserPasswordString', ], 'cpiUsername' => [ 'shape' => 'ConfigureAccessPointRequestCpiUsernameString', ], 'position' => [ 'shape' => 'Position', ], ], ], 'ConfigureAccessPointRequestCpiSecretKeyString' => [ 'type' => 'string', 'max' => 100000, 'min' => 1, 'sensitive' => true, ], 'ConfigureAccessPointRequestCpiUserIdString' => [ 'type' => 'string', 'max' => 4096, 'min' => 1, 'sensitive' => true, ], 'ConfigureAccessPointRequestCpiUserPasswordString' => [ 'type' => 'string', 'max' => 4096, 'min' => 1, 'sensitive' => true, ], 'ConfigureAccessPointRequestCpiUsernameString' => [ 'type' => 'string', 'max' => 4096, 'min' => 1, 'sensitive' => true, ], 'ConfigureAccessPointResponse' => [ 'type' => 'structure', 'required' => [ 'accessPoint', ], 'members' => [ 'accessPoint' => [ 'shape' => 'NetworkResource', ], ], ], 'CreateNetworkRequest' => [ 'type' => 'structure', 'required' => [ 'networkName', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', ], 'description' => [ 'shape' => 'Description', ], 'networkName' => [ 'shape' => 'Name', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateNetworkResponse' => [ 'type' => 'structure', 'required' => [ 'network', ], 'members' => [ 'network' => [ 'shape' => 'Network', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateNetworkSiteRequest' => [ 'type' => 'structure', 'required' => [ 'networkArn', 'networkSiteName', ], 'members' => [ 'availabilityZone' => [ 'shape' => 'String', ], 'availabilityZoneId' => [ 'shape' => 'String', ], 'clientToken' => [ 'shape' => 'ClientToken', ], 'description' => [ 'shape' => 'Description', ], 'networkArn' => [ 'shape' => 'Arn', ], 'networkSiteName' => [ 'shape' => 'Name', ], 'pendingPlan' => [ 'shape' => 'SitePlan', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateNetworkSiteResponse' => [ 'type' => 'structure', 'members' => [ 'networkSite' => [ 'shape' => 'NetworkSite', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'DeactivateDeviceIdentifierRequest' => [ 'type' => 'structure', 'required' => [ 'deviceIdentifierArn', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', ], 'deviceIdentifierArn' => [ 'shape' => 'Arn', ], ], ], 'DeactivateDeviceIdentifierResponse' => [ 'type' => 'structure', 'required' => [ 'deviceIdentifier', ], 'members' => [ 'deviceIdentifier' => [ 'shape' => 'DeviceIdentifier', ], ], ], 'DeleteNetworkRequest' => [ 'type' => 'structure', 'required' => [ 'networkArn', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', 'location' => 'querystring', 'locationName' => 'clientToken', ], 'networkArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'networkArn', ], ], ], 'DeleteNetworkResponse' => [ 'type' => 'structure', 'required' => [ 'network', ], 'members' => [ 'network' => [ 'shape' => 'Network', ], ], ], 'DeleteNetworkSiteRequest' => [ 'type' => 'structure', 'required' => [ 'networkSiteArn', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', 'location' => 'querystring', 'locationName' => 'clientToken', ], 'networkSiteArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'networkSiteArn', ], ], ], 'DeleteNetworkSiteResponse' => [ 'type' => 'structure', 'members' => [ 'networkSite' => [ 'shape' => 'NetworkSite', ], ], ], 'Description' => [ 'type' => 'string', 'max' => 100, 'min' => 0, ], 'DeviceIdentifier' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'Timestamp', ], 'deviceIdentifierArn' => [ 'shape' => 'Arn', ], 'iccid' => [ 'shape' => 'String', ], 'imsi' => [ 'shape' => 'DeviceIdentifierImsiString', ], 'networkArn' => [ 'shape' => 'Arn', ], 'orderArn' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'DeviceIdentifierStatus', ], 'trafficGroupArn' => [ 'shape' => 'Arn', ], 'vendor' => [ 'shape' => 'String', ], ], ], 'DeviceIdentifierFilterKeys' => [ 'type' => 'string', 'enum' => [ 'STATUS', 'ORDER', 'TRAFFIC_GROUP', ], ], 'DeviceIdentifierFilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'DeviceIdentifierFilters' => [ 'type' => 'map', 'key' => [ 'shape' => 'DeviceIdentifierFilterKeys', ], 'value' => [ 'shape' => 'DeviceIdentifierFilterValues', ], ], 'DeviceIdentifierImsiString' => [ 'type' => 'string', 'pattern' => '^[0-9]{15}$', 'sensitive' => true, ], 'DeviceIdentifierList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceIdentifier', ], ], 'DeviceIdentifierStatus' => [ 'type' => 'string', 'enum' => [ 'ACTIVE', 'INACTIVE', ], ], 'Double' => [ 'type' => 'double', 'box' => true, ], 'ElevationReference' => [ 'type' => 'string', 'enum' => [ 'AGL', 'AMSL', ], ], 'ElevationUnit' => [ 'type' => 'string', 'enum' => [ 'FEET', ], ], 'GetDeviceIdentifierRequest' => [ 'type' => 'structure', 'required' => [ 'deviceIdentifierArn', ], 'members' => [ 'deviceIdentifierArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'deviceIdentifierArn', ], ], ], 'GetDeviceIdentifierResponse' => [ 'type' => 'structure', 'members' => [ 'deviceIdentifier' => [ 'shape' => 'DeviceIdentifier', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'GetNetworkRequest' => [ 'type' => 'structure', 'required' => [ 'networkArn', ], 'members' => [ 'networkArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'networkArn', ], ], ], 'GetNetworkResourceRequest' => [ 'type' => 'structure', 'required' => [ 'networkResourceArn', ], 'members' => [ 'networkResourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'networkResourceArn', ], ], ], 'GetNetworkResourceResponse' => [ 'type' => 'structure', 'required' => [ 'networkResource', ], 'members' => [ 'networkResource' => [ 'shape' => 'NetworkResource', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'GetNetworkResponse' => [ 'type' => 'structure', 'required' => [ 'network', ], 'members' => [ 'network' => [ 'shape' => 'Network', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'GetNetworkSiteRequest' => [ 'type' => 'structure', 'required' => [ 'networkSiteArn', ], 'members' => [ 'networkSiteArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'networkSiteArn', ], ], ], 'GetNetworkSiteResponse' => [ 'type' => 'structure', 'members' => [ 'networkSite' => [ 'shape' => 'NetworkSite', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'GetOrderRequest' => [ 'type' => 'structure', 'required' => [ 'orderArn', ], 'members' => [ 'orderArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'orderArn', ], ], ], 'GetOrderResponse' => [ 'type' => 'structure', 'required' => [ 'order', ], 'members' => [ 'order' => [ 'shape' => 'Order', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'HealthStatus' => [ 'type' => 'string', 'enum' => [ 'INITIAL', 'HEALTHY', 'UNHEALTHY', ], ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'retryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'LimitExceededException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ListDeviceIdentifiersRequest' => [ 'type' => 'structure', 'required' => [ 'networkArn', ], 'members' => [ 'filters' => [ 'shape' => 'DeviceIdentifierFilters', ], 'maxResults' => [ 'shape' => 'ListDeviceIdentifiersRequestMaxResultsInteger', 'box' => true, ], 'networkArn' => [ 'shape' => 'Arn', ], 'startToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListDeviceIdentifiersRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 20, 'min' => 1, ], 'ListDeviceIdentifiersResponse' => [ 'type' => 'structure', 'members' => [ 'deviceIdentifiers' => [ 'shape' => 'DeviceIdentifierList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListNetworkResourcesRequest' => [ 'type' => 'structure', 'required' => [ 'networkArn', ], 'members' => [ 'filters' => [ 'shape' => 'NetworkResourceFilters', ], 'maxResults' => [ 'shape' => 'ListNetworkResourcesRequestMaxResultsInteger', 'box' => true, ], 'networkArn' => [ 'shape' => 'Arn', ], 'startToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListNetworkResourcesRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 20, 'min' => 1, ], 'ListNetworkResourcesResponse' => [ 'type' => 'structure', 'members' => [ 'networkResources' => [ 'shape' => 'NetworkResourceList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListNetworkSitesRequest' => [ 'type' => 'structure', 'required' => [ 'networkArn', ], 'members' => [ 'filters' => [ 'shape' => 'NetworkSiteFilters', ], 'maxResults' => [ 'shape' => 'ListNetworkSitesRequestMaxResultsInteger', 'box' => true, ], 'networkArn' => [ 'shape' => 'Arn', ], 'startToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListNetworkSitesRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 20, 'min' => 1, ], 'ListNetworkSitesResponse' => [ 'type' => 'structure', 'members' => [ 'networkSites' => [ 'shape' => 'NetworkSiteList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListNetworksRequest' => [ 'type' => 'structure', 'members' => [ 'filters' => [ 'shape' => 'NetworkFilters', ], 'maxResults' => [ 'shape' => 'ListNetworksRequestMaxResultsInteger', 'box' => true, ], 'startToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListNetworksRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 20, 'min' => 1, ], 'ListNetworksResponse' => [ 'type' => 'structure', 'members' => [ 'networks' => [ 'shape' => 'NetworkList', ], 'nextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListOrdersRequest' => [ 'type' => 'structure', 'required' => [ 'networkArn', ], 'members' => [ 'filters' => [ 'shape' => 'OrderFilters', ], 'maxResults' => [ 'shape' => 'ListOrdersRequestMaxResultsInteger', 'box' => true, ], 'networkArn' => [ 'shape' => 'Arn', ], 'startToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListOrdersRequestMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 20, 'min' => 1, ], 'ListOrdersResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'orders' => [ 'shape' => 'OrderList', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagMap', ], ], ], 'Name' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[0-9a-zA-Z-]*$', ], 'NameValuePair' => [ 'type' => 'structure', 'required' => [ 'name', ], 'members' => [ 'name' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], ], 'NameValuePairs' => [ 'type' => 'list', 'member' => [ 'shape' => 'NameValuePair', ], ], 'Network' => [ 'type' => 'structure', 'required' => [ 'networkArn', 'networkName', 'status', ], 'members' => [ 'createdAt' => [ 'shape' => 'Timestamp', ], 'description' => [ 'shape' => 'Description', ], 'networkArn' => [ 'shape' => 'Arn', ], 'networkName' => [ 'shape' => 'Name', ], 'status' => [ 'shape' => 'NetworkStatus', ], 'statusReason' => [ 'shape' => 'String', ], ], ], 'NetworkFilterKeys' => [ 'type' => 'string', 'enum' => [ 'STATUS', ], ], 'NetworkFilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'NetworkFilters' => [ 'type' => 'map', 'key' => [ 'shape' => 'NetworkFilterKeys', ], 'value' => [ 'shape' => 'NetworkFilterValues', ], ], 'NetworkList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Network', ], ], 'NetworkResource' => [ 'type' => 'structure', 'members' => [ 'attributes' => [ 'shape' => 'NameValuePairs', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'description' => [ 'shape' => 'Description', ], 'health' => [ 'shape' => 'HealthStatus', ], 'model' => [ 'shape' => 'String', ], 'networkArn' => [ 'shape' => 'Arn', ], 'networkResourceArn' => [ 'shape' => 'Arn', ], 'networkSiteArn' => [ 'shape' => 'Arn', ], 'orderArn' => [ 'shape' => 'Arn', ], 'position' => [ 'shape' => 'Position', ], 'serialNumber' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'NetworkResourceStatus', ], 'statusReason' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'NetworkResourceType', ], 'vendor' => [ 'shape' => 'String', ], ], ], 'NetworkResourceDefinition' => [ 'type' => 'structure', 'required' => [ 'count', 'type', ], 'members' => [ 'count' => [ 'shape' => 'NetworkResourceDefinitionCountInteger', ], 'options' => [ 'shape' => 'Options', ], 'type' => [ 'shape' => 'NetworkResourceDefinitionType', ], ], ], 'NetworkResourceDefinitionCountInteger' => [ 'type' => 'integer', 'box' => true, 'min' => 0, ], 'NetworkResourceDefinitionType' => [ 'type' => 'string', 'enum' => [ 'RADIO_UNIT', 'DEVICE_IDENTIFIER', ], ], 'NetworkResourceDefinitions' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkResourceDefinition', ], ], 'NetworkResourceFilterKeys' => [ 'type' => 'string', 'enum' => [ 'ORDER', 'STATUS', ], ], 'NetworkResourceFilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'NetworkResourceFilters' => [ 'type' => 'map', 'key' => [ 'shape' => 'NetworkResourceFilterKeys', ], 'value' => [ 'shape' => 'NetworkResourceFilterValues', ], ], 'NetworkResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkResource', ], ], 'NetworkResourceStatus' => [ 'type' => 'string', 'enum' => [ 'PENDING', 'SHIPPED', 'PROVISIONING', 'PROVISIONED', 'AVAILABLE', 'DELETING', 'PENDING_RETURN', 'DELETED', ], ], 'NetworkResourceType' => [ 'type' => 'string', 'enum' => [ 'RADIO_UNIT', ], ], 'NetworkSite' => [ 'type' => 'structure', 'required' => [ 'networkArn', 'networkSiteArn', 'networkSiteName', 'status', ], 'members' => [ 'availabilityZone' => [ 'shape' => 'String', ], 'availabilityZoneId' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'currentPlan' => [ 'shape' => 'SitePlan', ], 'description' => [ 'shape' => 'Description', ], 'networkArn' => [ 'shape' => 'Arn', ], 'networkSiteArn' => [ 'shape' => 'Arn', ], 'networkSiteName' => [ 'shape' => 'Name', ], 'pendingPlan' => [ 'shape' => 'SitePlan', ], 'status' => [ 'shape' => 'NetworkSiteStatus', ], 'statusReason' => [ 'shape' => 'String', ], ], ], 'NetworkSiteFilterKeys' => [ 'type' => 'string', 'enum' => [ 'STATUS', ], ], 'NetworkSiteFilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'NetworkSiteFilters' => [ 'type' => 'map', 'key' => [ 'shape' => 'NetworkSiteFilterKeys', ], 'value' => [ 'shape' => 'NetworkSiteFilterValues', ], ], 'NetworkSiteList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkSite', ], ], 'NetworkSiteStatus' => [ 'type' => 'string', 'enum' => [ 'CREATED', 'PROVISIONING', 'AVAILABLE', 'DEPROVISIONING', 'DELETED', ], ], 'NetworkStatus' => [ 'type' => 'string', 'enum' => [ 'CREATED', 'PROVISIONING', 'AVAILABLE', 'DEPROVISIONING', 'DELETED', ], ], 'Options' => [ 'type' => 'list', 'member' => [ 'shape' => 'NameValuePair', ], ], 'Order' => [ 'type' => 'structure', 'members' => [ 'acknowledgmentStatus' => [ 'shape' => 'AcknowledgmentStatus', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'networkArn' => [ 'shape' => 'Arn', ], 'networkSiteArn' => [ 'shape' => 'Arn', ], 'orderArn' => [ 'shape' => 'Arn', ], 'shippingAddress' => [ 'shape' => 'Address', ], 'trackingInformation' => [ 'shape' => 'TrackingInformationList', ], ], ], 'OrderFilterKeys' => [ 'type' => 'string', 'enum' => [ 'STATUS', 'NETWORK_SITE', ], ], 'OrderFilterValues' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'OrderFilters' => [ 'type' => 'map', 'key' => [ 'shape' => 'OrderFilterKeys', ], 'value' => [ 'shape' => 'OrderFilterValues', ], ], 'OrderList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Order', ], ], 'PaginationToken' => [ 'type' => 'string', ], 'PingResponse' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'String', ], ], ], 'Position' => [ 'type' => 'structure', 'members' => [ 'elevation' => [ 'shape' => 'Double', ], 'elevationReference' => [ 'shape' => 'ElevationReference', ], 'elevationUnit' => [ 'shape' => 'ElevationUnit', ], 'latitude' => [ 'shape' => 'Double', ], 'longitude' => [ 'shape' => 'Double', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', 'resourceId', 'resourceType', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'resourceId' => [ 'shape' => 'String', ], 'resourceType' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'SitePlan' => [ 'type' => 'structure', 'members' => [ 'options' => [ 'shape' => 'Options', ], 'resourceDefinitions' => [ 'shape' => 'NetworkResourceDefinitions', ], ], ], 'String' => [ 'type' => 'string', ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^(?!aws:)[^\\x00-\\x1f\\x22]+$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 50, 'min' => 1, 'sensitive' => true, ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], 'max' => 50, 'min' => 1, 'sensitive' => true, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^[^\\x00-\\x1f\\x22]*$', ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'Timestamp' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'TrackingInformation' => [ 'type' => 'structure', 'members' => [ 'trackingNumber' => [ 'shape' => 'String', ], ], ], 'TrackingInformationList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TrackingInformation', ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'Arn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateNetworkSitePlanRequest' => [ 'type' => 'structure', 'required' => [ 'networkSiteArn', 'pendingPlan', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', ], 'networkSiteArn' => [ 'shape' => 'Arn', ], 'pendingPlan' => [ 'shape' => 'SitePlan', ], ], ], 'UpdateNetworkSiteRequest' => [ 'type' => 'structure', 'required' => [ 'networkSiteArn', ], 'members' => [ 'clientToken' => [ 'shape' => 'ClientToken', ], 'description' => [ 'shape' => 'Description', ], 'networkSiteArn' => [ 'shape' => 'Arn', ], ], ], 'UpdateNetworkSiteResponse' => [ 'type' => 'structure', 'members' => [ 'networkSite' => [ 'shape' => 'NetworkSite', ], 'tags' => [ 'shape' => 'TagMap', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', 'reason', ], 'members' => [ 'fieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], 'message' => [ 'shape' => 'String', ], 'reason' => [ 'shape' => 'ValidationExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'message', 'name', ], 'members' => [ 'message' => [ 'shape' => 'String', ], 'name' => [ 'shape' => 'String', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'UNKNOWN_OPERATION', 'CANNOT_PARSE', 'CANNOT_ASSUME_ROLE', 'FIELD_VALIDATION_FAILED', 'OTHER', ], ], ],];
