# TODO #

### Primary tasks ###
* Create another mapper, to map item prototype/DTO to "real" item model
* Create factory for item model decoration
* Decorate item model, to add more functionality like eg. convert `Category`-`Id` pair 
from external source, to `item name`, `excelent options` etc.
* Create manager with functionality:
    * add new item
    * remove item
    * modify item
    * move item in collection
    * fetch all items
    
### Secondary tasks ##    
* Create Item.txt import component. Sample scenario:
    * User import Item.txt via admin panel
    * mutant-items-manager will parse the content
    * component will create DTOs based on parsed content
    * list of newly created DTOs will be received by eg. data provider for further processing
* Create manager to support operations on non-binary items (from webshop)
