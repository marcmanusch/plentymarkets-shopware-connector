// {namespace name=backend/Plentymarkets/store}
// {block name=backend/Plentymarkets/store/mapping/TransferObject}

/**
 * The status store is used to load the status model for data mapping and
 * is extended by the Ext data store "Ext.data.Store". With Ext stores you can handle
 * model data like adding, getting and removing models in a defined store.
 */
Ext.define('Shopware.apps.Plentymarkets.store.mapping.TransferObject', {
    extend: 'Ext.data.Store',
    autoLoad: false,
    model: 'Shopware.apps.Plentymarkets.model.mapping.TransferObject'
});
// {/block}