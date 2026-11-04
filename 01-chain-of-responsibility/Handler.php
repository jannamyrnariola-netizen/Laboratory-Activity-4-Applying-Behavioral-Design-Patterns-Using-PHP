<?php
// Base handler: knows the NEXT handler and decides whether to process or pass on.
abstract class Handler
{
    private ?Handler $next = null;

    // Returns the handler passed in so calls can be chained:
    // $a->setNext($b)->setNext($c);
    public function setNext(Handler $next): Handler
    {
        $this->next = $next;
        return $next;
    }

    public function handle(StudentRequest $request): void
    {
        if ($this->canHandle($request)) {
            echo $this->getOfficeName() . ": Processing " . $request->getType() . "..." . PHP_EOL;
            return;
        }

        echo $this->getOfficeName() . ": Cannot process request." . PHP_EOL;

        if ($this->next !== null) {
            $this->next->handle($request);   // pass to the next handler
        } else {
            echo "No office in the chain can process this request." . PHP_EOL;
        }
    }

    private function canHandle(StudentRequest $request): bool
    {
        return in_array($request->getType(), $this->getSupportedRequests(), true);
    }

    // Each concrete handler defines its own office name and supported requests.
    abstract protected function getOfficeName(): string;
    abstract protected function getSupportedRequests(): array;
}
