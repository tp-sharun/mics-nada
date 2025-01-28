<?php

$facet_bg=array(
    '#2364aa',
    '#3da5d9',
    '#73bfb8',
    '#fec601',
    '#ea7317',
    '#99B898',
    '#FECEAB',
    '#FF847C',
    '#E84A5F',
    '#2A363B',

    '#F8B195',
    '#F67280',
    '#C06C84',
    '#6C5B7B',
    '#355C7D',
    '#99B898',
    '#FECEAB',
    '#FF847C',
    '#E84A5F',
);
$bg=0;
?>
<?php foreach ($facets as $facet_key => $facet): ?>
    <?php if (isset($facet['type']) && $facet['type'] == 'user'): ?>
        <?php if (isset($search_options->{$facet_key}) && is_array($search_options->{$facet_key})): ?>
            <span class="selected-filter-type"><?php if(ucfirst($facet_key)=='Type'){echo "Data Type";}else{echo ucfirst($facet_key);}  ?>:</span>
            <?php foreach ($search_options->{$facet_key} as $facet_value): ?>
                <?php if (array_key_exists($facet_value, $facets[$facet_key]['values'])): ?>
                    <span 
                        class="badge badge-default badge-secondary wb-badge-close remove-filter type" 
                        data-type="<?php echo $facet_key; ?>[]" 
                        data-value="<?php echo html_escape($facet_value); ?>">
                        <?php echo html_escape($facets[$facet_key]['values'][$facet_value]['title']); ?>
                        <i class="fa fa-close fas fa-times"></i>
                    </span>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endforeach; ?>

<?php if (isset($search_options->repo) && $search_options->repo != ''): ?>
    <span>Repo:</span>
    <?php if (isset($active_repo) && $active_repo['title']): ?>
        <a href="<?php echo site_url('catalog'); ?>">
            <span 
                class="badge badge-primary wb-badge-close repo remove-filter-x repo" 
                data-type="repo" 
                data-value="">
                <?php echo html_escape($active_repo['title']); ?>
                <i class="fa fa-close fas fa-times"></i>
            </span>
        </a>
    <?php endif; ?>
<?php endif; ?>

<?php if (is_array($search_options->type)): ?>
    <span>Data Type:</span>
    <?php foreach ($search_options->type as $type): ?>
        <?php if ($search_options->tab_type == $type) { continue; }; ?>
        <span 
            class="badge badge-default badge-secondary wb-badge-close remove-filter type" 
            data-type="type[]" 
            data-value="<?php echo $type; ?>">
            <?php echo $type; ?>
            <i class="fas fa-times"></i>
        </span>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (is_array($search_options->country)): ?>
    <span>Country:</span>
    <?php foreach ($search_options->country as $country): ?>
        <?php if (is_array($countries) && array_key_exists($country, $countries)): ?>
            <span 
                class="badge badge-default wb-badge-close remove-filter country" 
                data-type="country[]" 
                data-value="<?php echo $country; ?>">
                <?php echo $countries[$country]; ?>
                <i class="fas fa-times"></i>
            </span>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (isset($search_options->region) && is_array($search_options->region)): ?>
    <span>Region:</span>
    <?php foreach ($search_options->region as $region): ?>
        <?php if (array_key_exists($region, $regions)): ?>
            <span 
                class="badge badge-default wb-badge-close country remove-filter region" 
                data-type="region[]" 
                data-value="<?php echo $region; ?>">
                <?php echo $regions[$region]['title']; ?>
                <i class="fas fa-times"></i>
            </span>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

