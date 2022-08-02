<?php

class __Mustache_bec8c3ea3398484d3b395e923b864a7e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="pdfannotator-statistic">
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-6">
';
        $buffer .= $indent . '            <table class = "generaltable table-bordered">
';
        $buffer .= $indent . '                <thead>
';
        $buffer .= $indent . '                    <tr>
';
        $buffer .= $indent . '                        <th></th><th>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section50e8b7561ea36eafe891295e18a6f01b($context, $indent, $value);
        $buffer .= '</th><th>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC3eca3edf8c3a485178789eaea529f19($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '                    </tr>
';
        $buffer .= $indent . '                </thead>
';
        $buffer .= $indent . '                <tbody>
';
        // 'tabledata' section
        $value = $context->find('tabledata');
        $buffer .= $this->section3d8fb5dd81edbfc89ce8b9a7a45cbdd7($context, $indent, $value);
        $buffer .= $indent . '                </tbody>
';
        $buffer .= $indent . '            </table>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '      <div class="col-md-12">
';
        $buffer .= $indent . '         <div id="chart_questions_answers" ></div> 
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="col-md-12">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div id="chart-container">
';
        $buffer .= $indent . '                <canvas id="myChart"></canvas> 
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section50e8b7561ea36eafe891295e18a6f01b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'in_document, pdfannotator';
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
                
                $buffer .= 'in_document, pdfannotator';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3eca3edf8c3a485178789eaea529f19(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'in_course, pdfannotator';
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
                
                $buffer .= 'in_course, pdfannotator';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section160e0deecaf2910c0464a09dbfefb203(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' miau? ';
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
                
                $buffer .= ' miau? ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b6d681d4bff915039c3655c5c2cc565(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <td> {{{.}}} {{#xx}} miau? {{/xx}}</td> ';
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
                
                $buffer .= ' <td> ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $value;
                $buffer .= ' ';
                // 'xx' section
                $value = $context->find('xx');
                $buffer .= $this->section160e0deecaf2910c0464a09dbfefb203($context, $indent, $value);
                $buffer .= '</td> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3d8fb5dd81edbfc89ce8b9a7a45cbdd7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr>
                            {{#row}} <td> {{{.}}} {{#xx}} miau? {{/xx}}</td> {{/row}}
                        </tr>
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
                
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            ';
                // 'row' section
                $value = $context->find('row');
                $buffer .= $this->section4b6d681d4bff915039c3655c5c2cc565($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
