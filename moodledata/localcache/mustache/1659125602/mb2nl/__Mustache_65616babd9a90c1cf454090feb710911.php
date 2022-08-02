<?php

class __Mustache_65616babd9a90c1cf454090feb710911 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'channellink' section
        $value = $context->find('channellink');
        $buffer .= $this->section04bc88bc0c14d3141ea1a0625d892c48($context, $indent, $value);
        // 'hasfailedfeeds' section
        $value = $context->find('hasfailedfeeds');
        $buffer .= $this->sectionEe15d9249bd351e7515d4e5a05ee2b2e($context, $indent, $value);

        return $buffer;
    }

    private function section8b98578489be8a9f46bc3e0191cd7129(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' clientchannellink, block_rss_client ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' clientchannellink, block_rss_client ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf9eedb4b0d6c9989df59b1c179efafb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<br>';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<br>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section04bc88bc0c14d3141ea1a0625d892c48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{channellink}}}">{{#str}} clientchannellink, block_rss_client {{/str}}</a>
    {{#hasfailedfeeds}}<br>{{/hasfailedfeeds}}
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('channellink'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8b98578489be8a9f46bc3e0191cd7129($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '    ';
                // 'hasfailedfeeds' section
                $value = $context->find('hasfailedfeeds');
                $buffer .= $this->sectionBf9eedb4b0d6c9989df59b1c179efafb($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9c4658f4792dd2daa1cd0ad13151fa5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' failedfeeds, block_rss_client ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' failedfeeds, block_rss_client ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe15d9249bd351e7515d4e5a05ee2b2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{{manageurl}}}">{{#str}} failedfeeds, block_rss_client {{/str}}</a>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('manageurl'), $context);
                $buffer .= $value;
                $buffer .= '">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionB9c4658f4792dd2daa1cd0ad13151fa5($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
